{{-- Modal Edit Data --}}
@foreach ($testimoni as $testimoni)
<div class="modal fade" id="editData{{ $testimoni->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $testimoni->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data Testimoni</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $testimoni->id }}" action="{{ route('testimoni.update', ['testimoni' => $testimoni->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="edit_nama" class="col-form-label">Nama:</label>
                        <input type="text" class="form-control" id="edit_nama" name="edit_nama" value="{{ $testimoni->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_jabatan" class="col-form-label">Jabatan:</label>
                        <input type="text" class="form-control" id="edit_jabatan" name="edit_jabatan" value="{{ $testimoni->jabatan }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_ucapan" class="col-form-label">Ucapan:</label>
                        <textarea class="form-control" id="edit_ucapan" name="edit_ucapan" rows="4">{{ $testimoni->ucapan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_foto" class="col-form-label">Foto:</label><br>
                        <input type="file" class="form-control" id="edit_foto" name="edit_foto" accept="image/*">
                        <img src="{{ asset('storage/' . $testimoni->foto) }}" class="mt-2" style="max-width: 200px;" alt="foto testimoni {{ $testimoni->nama }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_aktif{{ $testimoni->id }}" value="aktif" {{ $testimoni->status == 'aktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_aktif{{ $testimoni->id }}">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_nonaktif{{ $testimoni->id }}" value="nonaktif" {{ $testimoni->status == 'nonaktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_nonaktif{{ $testimoni->id }}">Nonaktif</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-primary" form="formEditData{{ $testimoni->id }}">Update</button>
            </div>
        </div>
    </div>
</div>
@endforeach
