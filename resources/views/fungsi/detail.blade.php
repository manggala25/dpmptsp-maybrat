{{-- Modal Detail Data --}}
@foreach ($program_kerja as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Program</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_nama_program" class="col-form-label">Nama Portal:</label>
                    <input type="text" class="form-control" id="detail_nama_program" name="detail_nama_program" value="{{ $item->nama_program }}" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Status Portal:</label><br>
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
