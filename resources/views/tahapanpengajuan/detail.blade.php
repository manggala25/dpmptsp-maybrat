{{-- Modal Detail Data --}}
@foreach ($tahapan_pengajuan as $tahapan_pengajuan)
<div class="modal fade" id="detailData{{ $tahapan_pengajuan->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $tahapan_pengajuan->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Informasi</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_nama_tahapan" class="col-form-label">Nama Tahapan:</label>
                    <input type="text" class="form-control" id="detail_nama_tahapan" name="detail_nama_tahapan" value="{{ $tahapan_pengajuan->nama_tahapan }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_deskripsi" class="col-form-label">Deskripsi:</label>
                    <input type="text" class="form-control" id="detail_deskripsi" name="detail_deskripsi" value="{{ $tahapan_pengajuan->deskripsi }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_urutan" class="col-form-label">Urutan:</label>
                    <input type="text" class="form-control" id="detail_urutan" name="detail_urutan" value="{{ $tahapan_pengajuan->urutan }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_icon" class="col-form-label">Icon:</label><br>
                    <img src="{{ asset('storage/' . $tahapan_pengajuan->icon) }}" class="mt-2" style="max-width: 200px;" alt="icon {{ $tahapan_pengajuan->nama_informasi }}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
