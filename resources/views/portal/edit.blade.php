{{-- Modal Edit Data --}}
@foreach ($portal as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data Portal</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $item->id }}" action="{{ route('portal.update', ['portal' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="edit_nama_portal" class="col-form-label">Nama Portal:</label>
                        <input type="text" class="form-control" id="edit_nama_portal" name="edit_nama_portal" value="{{ $item->nama_portal }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_link_portal" class="col-form-label">Link Portal:</label>
                        <input type="text" class="form-control" id="edit_link_portal" name="edit_link_portal" value="{{ $item->link_portal }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status Portal:</label><br>
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
                        <label for="edit_deskripsi_portal" class="col-form-label">Deskripsi Portal:</label>
                        <textarea class="form-control" id="edit_deskripsi_portal" name="edit_deskripsi_portal">{{ $item->deskripsi_portal }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_gambar_portal" class="col-form-label">Pilih Gambar Portal:</label>
                        <input type="file" class="form-control" id="edit_gambar_portal" name="edit_gambar_portal" accept="image/*">
                        <img src="{{ asset('storage/' . $item->gambar_portal) }}" class="mt-2" style="max-width: 200px;" alt="gambar {{ $item->nama_portal }}">
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
