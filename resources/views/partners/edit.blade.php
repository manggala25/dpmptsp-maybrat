{{-- Modal Edit Data --}}
@foreach ($partners as $partners)
<div class="modal fade" id="editData{{ $partners->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $partners->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data partner</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $partners->id }}" action="{{ route('partners.update', ['partners' => $partners->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="edit_nama_partner" class="col-form-label">Nama Partner:</label>
                        <input type="text" class="form-control" id="edit_nama_partner" name="edit_nama_partner" value="{{ $partners->nama_partner }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_link" class="col-form-label">Link:</label>
                        <input type="text" class="form-control" id="edit_link" name="edit_link" value="{{ $partners->link }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_logo" class="col-form-label">logo:</label><br>
                        <input type="file" class="form-control" id="edit_logo" name="edit_logo" accept="image/*">
                        <img src="{{ asset('storage/' . $partners->logo) }}" class="mt-2" style="max-width: 200px;" alt="logo {{ $partners->nama_partner }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_aktif{{ $partners->id }}" value="aktif" {{ $partners->status == 'aktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_aktif{{ $partners->id }}">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_nonaktif{{ $partners->id }}" value="nonaktif" {{ $partners->status == 'nonaktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_nonaktif{{ $partners->id }}">Nonaktif</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-primary" form="formEditData{{ $partners->id }}">Update</button>
            </div>
        </div>
    </div>
</div>
@endforeach
