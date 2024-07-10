{{-- Modal Detail Data --}}
@foreach ($menuhome as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Homepage</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_logo_dark" class="col-form-label">Logo Dark:</label><br>
                    <img src="{{ asset('storage/' . $item->logo_dark) }}" class="mt-2" style="max-width: 200px;" alt="logo dark {{ $item->judul }}">
                </div>
                <div class="form-group">
                    <label for="detail_logo_white" class="col-form-label">Logo White:</label><br>
                    <img src="{{ asset('storage/' . $item->logo_white) }}" class="mt-2" style="max-width: 200px;" alt="logo white {{ $item->judul }}">
                </div>
                <div class="form-group">
                    <label for="detail_bg_hero" class="col-form-label">Background Hero:</label><br>
                    <img src="{{ asset('storage/' . $item->bg_hero) }}" class="mt-2" style="max-width: 200px;" alt="background hero {{ $item->judul }}">
                </div>
                <div class="form-group">
                    <label for="detail_title_hero" class="col-form-label">Title Hero:</label>
                    <input type="text" class="form-control" id="detail_title_hero" name="detail_title_hero" value="{{ $item->title_hero }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_paragraf_hero" class="col-form-label">Paragraf Hero:</label>
                    <textarea class="form-control" id="detail_paragraf_hero" name="detail_paragraf_hero" readonly>{{ $item->paragraf_hero }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_img_profil" class="col-form-label">Image Profil:</label><br>
                    <img src="{{ asset('storage/' . $item->img_profil) }}" class="mt-2" style="max-width: 200px;" alt="image profil {{ $item->title_profil }}">
                </div>
                <div class="form-group">
                    <label for="detail_title_profil" class="col-form-label">Title Profil:</label>
                    <input type="text" class="form-control" id="detail_title_profil" name="detail_title_profil" value="{{ $item->title_profil }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_title_fungsi" class="col-form-label">Title Fungsi:</label>
                    <input type="text" class="form-control" id="detail_title_fungsi" name="detail_title_fungsi" value="{{ $item->title_fungsi }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_title_tugas" class="col-form-label">Title Tugas:</label>
                    <input type="text" class="form-control" id="detail_title_tugas" name="detail_title_tugas" value="{{ $item->title_tugas }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_title_layanan" class="col-form-label">Title Layanan:</label>
                    <input type="text" class="form-control" id="detail_title_layanan" name="detail_title_layanan" value="{{ $item->title_layanan }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_paragraf_layanan" class="col-form-label">Paragraf Layanan:</label>
                    <textarea class="form-control" id="detail_paragraf_layanan" name="detail_paragraf_layanan" readonly>{{ $item->paragraf_layanan }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_title_portal" class="col-form-label">Title Portal:</label>
                    <input type="text" class="form-control" id="detail_title_portal" name="detail_title_portal" value="{{ $item->title_portal }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_paragraf_portal" class="col-form-label">Paragraf Portal:</label>
                    <textarea class="form-control" id="detail_paragraf_portal" name="detail_paragraf_portal" readonly>{{ $item->paragraf_portal }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_title_berita" class="col-form-label">Title Berita:</label>
                    <input type="text" class="form-control" id="detail_title_berita" name="detail_title_berita" value="{{ $item->title_berita }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_paragraf_berita" class="col-form-label">Paragraf Berita:</label>
                    <textarea class="form-control" id="detail_paragraf_berita" name="detail_paragraf_berita" readonly>{{ $item->paragraf_berita }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_title_ucapan" class="col-form-label">Title Ucapan:</label>
                    <input type="text" class="form-control" id="detail_title_ucapan" name="detail_title_ucapan" value="{{ $item->title_ucapan }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_paragraf_ucapan" class="col-form-label">Paragraf Ucapan:</label>
                    <textarea class="form-control" id="detail_paragraf_ucapan" name="detail_paragraf_ucapan" readonly>{{ $item->paragraf_ucapan }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_title_instansi" class="col-form-label">Title Instansi:</label>
                    <input type="text" class="form-control" id="detail_title_instansi" name="detail_title_instansi" value="{{ $item->title_instansi }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_paragraf_instansi" class="col-form-label">Paragraf Instansi:</label>
                    <textarea class="form-control" id="detail_paragraf_instansi" name="detail_paragraf_instansi" readonly>{{ $item->paragraf_instansi }}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
