{{-- Modal Detail Data --}}
@foreach ($news as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Berita</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_judul" class="col-form-label">Judul:</label>
                    <input type="text" class="form-control" id="detail_judul" name="detail_judul" value="{{ $item->judul }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_slug" class="col-form-label">Slug:</label>
                    <input type="text" class="form-control" id="detail_slug" name="detail_slug" value="{{ $item->slug }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_isi" class="col-form-label">Isi Berita:</label>
                    <textarea class="form-control" id="detail_isi" name="detail_isi" readonly>{{ $item->isi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_gambar_berita" class="col-form-label">Gambar Berita:</label><br>
                    <img src="{{ asset('storage/' . $item->gambar_berita) }}" class="mt-2" style="max-width: 200px;" alt="gambar {{ $item->judul }}">
                </div>
                <div class="form-group">
                    <label for="detail_penulis" class="col-form-label">Penulis:</label>
                    <input type="text" class="form-control" id="detail_penulis" name="detail_penulis" value="{{ $item->penulis }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_kategori" class="col-form-label">Kategori:</label>
                    <input type="text" class="form-control" id="detail_kategori" name="detail_kategori" value="{{ $item->kategori }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_tanggal_publikasi" class="col-form-label">Tanggal Publikasi:</label>
                    <input type="text" class="form-control" id="detail_tanggal_publikasi" name="detail_tanggal_publikasi" value="{{ $item->tanggal_publikasi }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_status" class="col-form-label">Status:</label><br>
                    <input type="text" class="form-control" value="{{ ucfirst($item->status) }}" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
