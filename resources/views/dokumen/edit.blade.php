{{-- Modal Edit Data --}}
@foreach ($dokumen as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data Dokumen</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $item->id }}" action="{{ route('dokumen.update', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="edit_nama_dokumen" class="col-form-label">Nama dokumen:</label>
                        <input type="text" class="form-control" id="edit_nama_dokumen" name="edit_nama_dokumen" value="{{ $item->nama_dokumen }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_file_dokumen{{ $item->id }}" class="col-form-label">File Dokumen:</label>
                        <input type="file" class="form-control" id="edit_file_dokumen{{ $item->id }}" name="edit_file_dokumen">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status Dokumen:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_aktif{{ $item->id }}" value="aktif" {{ $item->status == 'aktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_aktif{{ $item->id }}">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_nonaktif{{ $item->id }}" value="nonaktif" {{ $item->status == 'nonaktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_nonaktif{{ $item->id }}">Nonaktif</label>
                        </div>
                    </div>
                    <input type="hidden" name="edit_file_dokumen_lama" value="{{ $item->file_dokumen }}">
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
