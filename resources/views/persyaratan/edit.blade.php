{{-- Edit Modal Data --}}
@foreach ($persyaratan as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('persyaratan.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h3 class="font-weight-bolder text-info text-gradient">Edit Data Persyaratan</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="perizinan_id" class="col-form-label">Nama Izin:</label>
                        <input type="text" class="form-control" id="perizinan_id" name="perizinan_id" value="{{ $item->perizinan->nama_izin }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="kategori_persyaratan_id" class="col-form-label">Kategori Persyaratan:</label>
                        <input type="text" class="form-control" id="kategori_persyaratan_id" name="kategori_persyaratan_id" value="{{ $item->kategoriPersyaratan->kategori }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="persyaratan" class="col-form-label">Persyaratan:</label>
                        <input type="text" class="form-control" id="persyaratan" name="persyaratan" value="{{ $item->persyaratan }}" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan" class="col-form-label">Keterangan:</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required>{{ $item->keterangan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="template_file" class="col-form-label">Template File:</label>
                        <input type="file" class="form-control" id="template_file" name="template_file">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah file.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-primary">Update</button>
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
