{{-- Modal Detail Data --}}
@foreach ($testimoni as $testimoni)
<div class="modal fade" id="detailData{{ $testimoni->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $testimoni->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Testimoni</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_nama" class="col-form-label">Nama:</label>
                    <input type="text" class="form-control" id="detail_nama" name="detail_nama" value="{{ $testimoni->nama }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_jabatan" class="col-form-label">Jabatan:</label>
                    <input type="text" class="form-control" id="detail_jabatan" name="detail_jabatan" value="{{ $testimoni->jabatan }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_ucapan" class="col-form-label">Ucapan:</label>
                    <textarea class="form-control" id="detail_ucapan" name="detail_ucapan" rows="4" readonly>{{ $testimoni->ucapan }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_foto" class="col-form-label">Foto:</label><br>
                    <img src="{{ asset('storage/' . $testimoni->foto) }}" class="mt-2" style="max-width: 200px;" alt="foto testimoni {{ $testimoni->nama }}">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Status:</label><br>
                    <input type="text" class="form-control" value="{{ $testimoni->status == 'aktif' ? 'Aktif' : 'Nonaktif' }}" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
