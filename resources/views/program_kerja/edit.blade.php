{{-- Modal Edit Data Program Kerja --}}
@foreach ($program_kerja as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data Program Kerja</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $item->id }}" action="{{ route('program_kerja.update', ['program_kerja' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_program" class="col-form-label">Nama Program Kerja:</label>
                        <input type="text" class="form-control" id="nama_program" name="nama_program" value="{{ $item->nama_program }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status Program Kerja:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_aktif" value="aktif" {{ $item->status == 'aktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_aktif">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_nonaktif" value="nonaktif" {{ $item->status == 'nonaktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_nonaktif">Nonaktif</label>
                        </div>
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
