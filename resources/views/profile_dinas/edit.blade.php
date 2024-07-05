{{-- Modal Edit Data --}}
@foreach ($profile_dinas as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data Profile Dinas</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $item->id }}" action="{{ route('profile_dinas.update', ['profile_dinas' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="edit_nama_dinas" class="col-form-label">Nama Dinas:</label>
                        <input type="text" class="form-control" id="edit_nama_dinas" name="edit_nama_dinas" value="{{ $item->nama_dinas }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_deskripsi" class="col-form-label">Deskripsi:</label>
                        <textarea class="form-control" id="edit_deskripsi" name="edit_deskripsi">{{ $item->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_dasarhukum" class="col-form-label">Dasar Hukum:</label>
                        <textarea class="form-control" id="edit_dasarhukum" name="edit_dasarhukum">{{ $item->dasarhukum }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_visi" class="col-form-label">Visi:</label>
                        <textarea class="form-control" id="edit_visi" name="edit_visi">{{ $item->visi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_misi" class="col-form-label">Misi:</label>
                        <textarea class="form-control" id="edit_misi" name="edit_misi">{{ $item->misi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_tujuan" class="col-form-label">Tujuan:</label>
                        <textarea class="form-control" id="edit_tujuan" name="edit_tujuan">{{ $item->tujuan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_gambar_strukturorganisasi" class="col-form-label">Pilih Gambar Struktur Organisasi:</label>
                        <input type="file" class="form-control" id="edit_gambar_strukturorganisasi" name="edit_gambar_strukturorganisasi" accept="image/*">
                        <img src="{{ asset('storage/' . $item->gambar_strukturorganisasi) }}" class="mt-2" style="max-width: 200px;" alt="gambar struktur organisasi {{ $item->nama_dinas }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_logo_dinas" class="col-form-label">Pilih Logo Dinas:</label>
                        <input type="file" class="form-control" id="edit_logo_dinas" name="edit_logo_dinas" accept="image/*">
                        <img src="{{ asset('storage/' . $item->logo_dinas) }}" class="mt-2" style="max-width: 200px;" alt="logo dinas {{ $item->nama_dinas }}">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-primary" form="formEditData{{ $item->id }}">Update</button>
            </div>
        </div>
    </div>
</div>
@endforeach
