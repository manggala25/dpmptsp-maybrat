@foreach ($persyaratan as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Persyaratan</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_izin" class="col-form-label">Nama Perizinan:</label>
                    <input type="text" class="form-control" id="nama_izin" name="nama_izin" value="{{ $item->perizinan->nama_izin }}" readonly>
                </div>
                <div class="form-group">
                    <label for="kategori_persyaratan" class="col-form-label">Kategori Persyaratan:</label>
                    <input type="text" class="form-control" id="kategori_persyaratan" name="kategori_persyaratan" value="{{ $item->kategoripersyaratan->kategori }}" readonly>
                </div>
                <div class="form-group">
                    <label for="persyaratan" class="col-form-label">Persyaratan:</label>
                    <input type="text" class="form-control" id="persyaratan" name="persyaratan" value="{{ $item->persyaratan }}" readonly>
                </div>
                <div class="form-group">
                    <label for="keterangan" class="col-form-label">Keterangan:</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" readonly>{{ $item->keterangan }}</textarea>
                </div>
                @if ($item->template_file)
                <div class="form-group d-flex">
                    <label for="template_file{{ $item->id }}" class="col-form-label">Template File:</label>
                    <a href="{{ asset('storage/' . $item->template_file) }}" class="btn btn-primary" target="_blank">Lihat File</a>
                </div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
