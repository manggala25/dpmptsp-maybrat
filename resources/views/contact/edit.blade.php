{{-- Modal Edit Data --}}
@foreach ($contact as $contact)
<div class="modal fade" id="editData{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $contact->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data Informasi</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $contact->id }}" action="{{ route('contact.update', ['contact' => $contact->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="edit_nama_informasi" class="col-form-label">Nama Informasi:</label>
                        <input type="text" class="form-control" id="edit_nama_informasi" name="edit_nama_informasi" value="{{ $contact->nama_informasi }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_link" class="col-form-label">Link:</label>
                        <input type="text" class="form-control" id="edit_link" name="edit_link" value="{{ $contact->link }}">
                    </div>
                    <div class="form-group">
                        <label for="detail" class="col-form-label">Detail:</label>
                        <input type="text" class="form-control" id="edit_detail" name="edit_detail" value="{{ $contact->detail }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_icon" class="col-form-label">Icon:</label><br>
                        <input type="file" class="form-control" id="edit_icon" name="edit_icon" accept="image/*">
                        <img src="{{ asset('storage/' . $contact->icon) }}" class="mt-2" style="max-width: 200px;" alt="icon {{ $contact->nama_informasi }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_aktif{{ $contact->id }}" value="aktif" {{ $contact->status == 'aktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_aktif{{ $contact->id }}">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_nonaktif{{ $contact->id }}" value="nonaktif" {{ $contact->status == 'nonaktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_nonaktif{{ $contact->id }}">Nonaktif</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-primary" form="formEditData{{ $contact->id }}">Update</button>
            </div>
        </div>
    </div>
</div>
@endforeach
