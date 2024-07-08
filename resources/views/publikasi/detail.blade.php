{{-- Modal Detail Data --}}
@foreach ($publikasi as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Publikasi</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_nama_publikasi" class="col-form-label">Nama Portal:</label>
                    <input type="text" class="form-control" id="detail_nama_publikasi" name="detail_nama_publikasi" value="{{ $item->nama_publikasi }}" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Status Portal:</label><br>
                    <input type="text" class="form-control" value="{{ $item->status == 'aktif' ? 'Aktif' : 'Nonaktif' }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_deskripsi" class="col-form-label">Deskripsi</label>
                    <textarea class="form-control" id="detail_deskripsi" name="detail_deskripsi" readonly>{{ $item->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_gambar" class="col-form-label">Gambar Portal:</label><br>
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="mt-2" style="max-width: 200px;" alt="gambar {{ $item->nama_publikasi }}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
