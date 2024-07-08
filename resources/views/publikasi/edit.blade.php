{{-- Modal Edit Data --}}
@foreach ($publikasi as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data Publikas</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $item->id }}" action="{{ route('publikasi.update', ['publikasi' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="edit_nama_publikasi" class="col-form-label">Nama Publikasi:</label>
                        <input type="text" class="form-control" id="edit_nama_publikasi" name="edit_nama_publikasi" value="{{ $item->nama_publikasi }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status Publikas9:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_aktif{{ $item->id }}" value="aktif" {{ $item->status == 'aktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_aktif{{ $item->id }}">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_nonaktif{{ $item->id }}" value="nonaktif" {{ $item->status == 'nonaktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_nonaktif{{ $item->id }}">Nonaktif</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_deskripsi" class="col-form-label">Deskripsi Publikas:</label>
                        <textarea class="form-control" id="edit_deskripsi" name="edit_deskripsi">{{ $item->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_gambar" class="col-form-label">Pilih Gambar publikas:</label>
                        <input type="file" class="form-control" id="edit_gambar" name="edit_gambar" accept="image/*">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="mt-2" style="max-width: 200px;" alt="gambar {{ $item->nama_publikasi }}">
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
