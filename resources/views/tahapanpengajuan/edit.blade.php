{{-- Modal Edit Data --}}
@foreach ($tahapan_pengajuan as $tahapan_pengajuan)
<div class="modal fade" id="editData{{ $tahapan_pengajuan->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $tahapan_pengajuan->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data Informasi</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $tahapan_pengajuan->id }}" action="{{ route('tahapanpengajuan.update', ['tahapanpengajuan' => $tahapan_pengajuan->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="edit_nama_tahapan" class="col-form-label">Nama Tahapan:</label>
                        <input type="text" class="form-control" id="edit_nama_tahapan" name="edit_nama_tahapan" value="{{ $tahapan_pengajuan->nama_tahapan }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi" class="col-form-label">Deskripsi:</label>
                        <input type="text" class="form-control" id="edit_deskripsi" name="edit_deskripsi" value="{{ $tahapan_pengajuan->deskripsi }}">
                    </div>
                    <div class="form-group">
                        <label for="urutan" class="col-form-label">urutan:</label>
                        <input type="text" class="form-control" id="edit_urutan" name="edit_urutan" value="{{ $tahapan_pengajuan->urutan }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_icon" class="col-form-label">Icon:</label><br>
                        <input type="file" class="form-control" id="edit_icon" name="edit_icon" accept="image/*">
                        <img src="{{ asset('storage/' . $tahapan_pengajuan->icon) }}" class="mt-2" style="max-width: 200px;" alt="icon {{ $tahapan_pengajuan->nama_tahapan }}">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-primary" form="formEditData{{ $tahapan_pengajuan->id }}">Update</button>
            </div>
        </div>
    </div>
</div>
@endforeach
