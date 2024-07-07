{{-- Modal Detail Data Layanan --}}
@foreach ($layanan as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Layanan</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_nama_layanan{{ $item->id }}" class="col-form-label">Nama Layanan:</label>
                    <input type="text" class="form-control" id="detail_nama_layanan{{ $item->id }}" name="detail_nama_layanan" value="{{ $item->nama_layanan }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_icon{{ $item->id }}" class="col-form-label">Icon:</label>
                    <input type="text" class="form-control" id="detail_icon{{ $item->id }}" name="detail_icon" value="{{ $item->icon }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_slug{{ $item->id }}" class="col-form-label">Slug:</label>
                    <input type="text" class="form-control" id="detail_slug{{ $item->id }}" name="detail_slug" value="{{ $item->slug }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_deskripsi{{ $item->id }}" class="col-form-label">Deskripsi:</label>
                    <textarea class="form-control" id="detail_deskripsi{{ $item->id }}" name="detail_deskripsi" readonly>{{ $item->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Status Layanan:</label><br>
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
