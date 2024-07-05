<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\Portal;

class PortalController extends Controller
{
    public function index()
    {
        $portal = Portal::all();
        return view('portal.index', compact('portal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'nama_portal' => 'required',
            'deskripsi_portal' => 'required',
            'link_portal' => 'required',
            'gambar_portal' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:aktif,nonaktif',
        ], [
            'nama_portal.required' => 'Nama Portal tidak boleh kosong',
            'deskripsi_portal.required' => 'Deskripsi tidak boleh kosong',
            'link_portal.required' => 'Link Portal tidak boleh kosong',
            'gambar_portal.required' => 'Gambar tidak boleh kosong',
            'gambar_portal.image' => 'File harus berupa gambar',
            'gambar_portal.mimes' => 'Format gambar yang diterima: jpeg, png, jpg, gif, svg',
            'gambar_portal.max' => 'Ukuran gambar maksimal 2MB',
            'status.required' => 'Status tidak boleh kosong',
            'status.in' => 'Status harus antara "aktif" atau "nonaktif"',
        ]);

        if ($request->hasFile('gambar_portal')) {
            $validate = Validator::make($request->all(), [
                'gambar_portal' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'gambar_portal.required' => 'Gambar tidak boleh kosong',
                'gambar_portal.image' => 'File harus berupa gambar',
                'gambar_portal.mimes' => 'Format gambar yang diterima: jpeg, png, jpg, gif, svg',
                'gambar_portal.max' => 'Ukuran gambar maksimal 2MB',
            ]);
        }
        
        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $imagePath = $request->file('gambar_portal')->store('public/portal');
        $imagePath = str_replace('public/', '', $imagePath);

        $status = $request->input('status');

        $store = Portal::create([
            'nama_portal' => $request->nama_portal,
            'deskripsi_portal' => $request->deskripsi_portal,
            'link_portal' => $request->link_portal,
            'gambar_portal' => $imagePath,
            'status' => $status,
        ]);

        if ($store) {
            Alert::success('Success', 'Data berhasil disimpan');
            return redirect()->route('portal.index');
        } else {
            Alert::error('Error', 'Data gagal disimpan');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'edit_nama_portal' => 'required|string',
            'edit_link_portal' => 'required|url',
            'edit_status' => 'required|in:aktif,nonaktif',
            'edit_deskripsi_portal' => 'required|string',
            'edit_gambar_portal' => 'image|max:2048', // Contoh validasi untuk gambar, maksimal 2MB
        ]);

        // Cari data portal berdasarkan $id
        $portal = Portal::findOrFail($id);

        // Update data portal
        $portal->nama_portal = $request->edit_nama_portal;
        $portal->link_portal = $request->edit_link_portal;
        $portal->status = $request->edit_status;
        $portal->deskripsi_portal = $request->edit_deskripsi_portal;

        // Mengelola upload gambar jika ada
        if ($request->hasFile('edit_gambar_portal')) {
            // Hapus gambar lama jika ada
            if ($portal->gambar_portal && file_exists(storage_path('app/public/' . $portal->gambar_portal))) {
                unlink(storage_path('app/public/' . $portal->gambar_portal));
            }

            // Simpan gambar baru
            $gambarPath = $request->file('edit_gambar_portal')->store('portal', 'public');
            $portal->gambar_portal = $gambarPath;
        }

        // Simpan perubahan
        $portal->save();

        // Redirect atau kembalikan response sesuai kebutuhan aplikasi
        return redirect()->back()->with('success', 'Data portal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portal = Portal::findOrFail($id);

        if ($portal->gambar_portal) {
            Storage::disk('public')->delete($portal->gambar_portal);
        }

        $portal->delete();

        return redirect()->route('portal.index')->with('success', 'Portal berhasil dihapus');
    }
}
