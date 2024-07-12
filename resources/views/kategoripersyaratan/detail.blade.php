{{-- Modal Detail Data --}}
@foreach ($perizinan as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data perizinan</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_izin" class="col-form-label">Nama Perizinan:</label>
                    <input type="text" class="form-control" id="nama_izin" name="nama_izin" value="{{ $item->nama_izin }}" readonly>
                </div>
                <div class="form-group">
                    <label for="bidang_izin" class="col-form-label">Bidang Izin:</label>
                    <input type="text" class="form-control" id="bidang_izin" name="bidang_izin" value="{{ $item->bidang_izin }}" readonly>
                </div>
                <div class="form-group">
                    <label for="masa_berlaku" class="col-form-label">Masa Berlaku:</label>
                    <input type="text" class="form-control" id="masa_berlaku" name="masa_berlaku" value="{{ $item->masa_berlaku }}" readonly>
                </div>
                <div class="form-group">
                    <label for="lama_proses" class="col-form-label">Lama Proses:</label>
                    <input type="text" class="form-control" id="lama_proses" name="lama_proses" value="{{ $item->lama_proses }}" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Status Perizinan:</label><br>
                    <input type="text" class="form-control" value="{{ $item->status == 'aktif' ? 'Aktif' : 'Nonaktif' }}" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
