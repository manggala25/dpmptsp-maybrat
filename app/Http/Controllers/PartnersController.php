<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\Partners;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partners::all();
        return view('partners.index', compact('partners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama_partner' => 'required',
            'link' => 'required|url',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:aktif,nonaktif',
        ], [
            'nama_partner.required' => 'Nama Partner tidak boleh kosong',
            'link.required' => 'Link Partner tidak boleh kosong',
            'link.url' => 'Format link tidak valid',
            'logo.required' => 'Gambar tidak boleh kosong',
            'logo.image' => 'File harus berupa gambar',
            'logo.mimes' => 'Format gambar yang diterima: jpeg, png, jpg, gif, svg',
            'logo.max' => 'Ukuran gambar maksimal 2MB',
            'status.required' => 'Status tidak boleh kosong',
            'status.in' => 'Status harus antara "aktif" atau "nonaktif"',
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $imagePath = $request->file('logo')->store('public/partners');
        $imagePath = str_replace('public/', '', $imagePath);

        $status = $request->input('status');

        $partner = Partners::create([
            'nama_partner' => $request->nama_partner,
            'link' => $request->link,
            'logo' => $imagePath,
            'status' => $status,
        ]);

        if ($partner) {
            Alert::success('Success', 'Data berhasil disimpan');
            return redirect()->route('partners.index');
        } else {
            Alert::error('Error', 'Data gagal disimpan');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'edit_nama_partner' => 'required|string',
            'edit_link' => 'required|url',
            'edit_status' => 'required|in:aktif,nonaktif',
            'edit_logo' => 'image|max:2048',
        ]);

        $partner = Partners::findOrFail($id);

        $partner->nama_partner = $request->edit_nama_partner;
        $partner->link = $request->edit_link;
        $partner->status = $request->edit_status;

        if ($request->hasFile('edit_logo')) {
            if ($partner->logo && file_exists(storage_path('app/public/' . $partner->logo))) {
                unlink(storage_path('app/public/' . $partner->logo));
            }

            $gambarPath = $request->file('edit_logo')->store('public/partners');
            $partner->logo = str_replace('public/', '', $gambarPath);
        }

        $partner->save();

        return redirect()->back()->with('success', 'Data Partner berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partners::findOrFail($id);

        if ($partner->logo) {
            Storage::disk('public')->delete($partner->logo);
        }

        $partner->delete();

        return redirect()->route('partners.index')->with('success', 'Partner berhasil dihapus');
    }
}
