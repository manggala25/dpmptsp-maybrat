{{-- Modal Detail Data --}}
@foreach ($partners as $partners)
<div class="modal fade" id="detailData{{ $partners->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $partners->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Partner</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_nama_partner" class="col-form-label">Nama Partner:</label>
                    <input type="text" class="form-control" id="detail_nama_partner" name="detail_nama_partner" value="{{ $partners->nama_partner }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_link" class="col-form-label">Link:</label>
                    <input type="text" class="form-control" id="detail_link" name="detail_link" value="{{ $partners->link }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_logo" class="col-form-label">Logo:</label><br>
                    <img src="{{ asset('storage/' . $partners->logo) }}" class="mt-2" style="max-width: 200px;" alt="logo {{ $partners->nama_partner }}">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Status:</label><br>
                    <input type="text" class="form-control" value="{{ $partners->status == 'aktif' ? 'Aktif' : 'Nonaktif' }}" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
