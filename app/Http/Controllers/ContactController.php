<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('contact.index', compact('contact'));
    }

    public function showContact()
    {
        $contact = Contact::select('nama_informasi', 'link', 'detail')
            ->where('status', 'aktif')
            ->get();

        return view('contact.detail', compact('contact'));
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
            'nama_informasi' => 'required',
            'link' => 'required',
            'detail' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:aktif,nonaktif',
        ], [
            'nama_informasi.required' => 'Nama contact tidak boleh kosong',
            'link.required' => 'Link contact tidak boleh kosong',
            'detail.required' => 'Detail Informasi tidak boleh kosong',
            'icon.required' => 'Gambar tidak boleh kosong',
            'icon.image' => 'File harus berupa gambar',
            'icon.mimes' => 'Format gambar yang diterima: jpeg, png, jpg, gif, svg',
            'icon.max' => 'Ukuran gambar maksimal 2MB',
            'status.required' => 'Status tidak boleh kosong',
            'status.in' => 'Status harus antara "aktif" atau "nonaktif"',
        ]);

        if ($request->hasFile('icon')) {
            $validate = Validator::make($request->all(), [
                'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'icon.required' => 'Gambar tidak boleh kosong',
                'icon.image' => 'File harus berupa gambar',
                'icon.mimes' => 'Format gambar yang diterima: jpeg, png, jpg, gif, svg',
                'icon.max' => 'Ukuran gambar maksimal 2MB',
            ]);
        }

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $imagePath = $request->file('icon')->store('public/contact');
        $imagePath = str_replace('public/', '', $imagePath);

        $status = $request->input('status');

        $store = contact::create([
            'nama_informasi' => $request->nama_informasi,
            'detail' => $request->detail,
            'link' => $request->link,
            'icon' => $imagePath,
            'status' => $status,
        ]);

        if ($store) {
            Alert::success('Success', 'Data berhasil disimpan');
            return redirect()->route('contact.index');
        } else {
            Alert::error('Error', 'Data gagal disimpan');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'edit_nama_informasi' => 'required|string',
            'edit_link' => 'required|url',
            'edit_detail' => 'required|string',
            'edit_status' => 'required|in:aktif,nonaktif',
            'edit_icon' => 'image|max:2048',
        ]);

        $contact = contact::findOrFail($id);

        $contact->nama_informasi = $request->edit_nama_informasi;
        $contact->link = $request->edit_link;
        $contact->detail = $request->edit_detail;
        $contact->status = $request->edit_status;

        if ($request->hasFile('edit_icon')) {

            if ($contact->icon && file_exists(storage_path('app/public/' . $contact->icon))) {
                unlink(storage_path('app/public/' . $contact->icon));
            }

            $gambarPath = $request->file('edit_icon')->store('contact', 'public');
            $contact->icon = $gambarPath;
        }

        $contact->save();
        if ($contact) {
            return redirect()->back()->with('success', 'Data contact berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Data contact gagal diperbarui.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = contact::findOrFail($id);

        if ($contact->icon) {
            Storage::disk('public')->delete($contact->icon);
        }

        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'contact berhasil dihapus');
    }
}
