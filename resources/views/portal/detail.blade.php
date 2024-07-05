{{-- Modal Detail Data --}}
@foreach ($portal as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Portal</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_nama_portal" class="col-form-label">Nama Portal:</label>
                    <input type="text" class="form-control" id="detail_nama_portal" name="detail_nama_portal" value="{{ $item->nama_portal }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_link_portal" class="col-form-label">Link Portal:</label>
                    <input type="text" class="form-control" id="detail_link_portal" name="detail_link_portal" value="{{ $item->link_portal }}" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Status Portal:</label><br>
                    <input type="text" class="form-control" value="{{ $item->status == 'aktif' ? 'Aktif' : 'Nonaktif' }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_deskripsi_portal" class="col-form-label">Deskripsi Portal:</label>
                    <textarea class="form-control" id="detail_deskripsi_portal" name="detail_deskripsi_portal" readonly>{{ $item->deskripsi_portal }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_gambar_portal" class="col-form-label">Gambar Portal:</label><br>
                    <img src="{{ asset('storage/' . $item->gambar_portal) }}" class="mt-2" style="max-width: 200px;" alt="gambar {{ $item->nama_portal }}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
