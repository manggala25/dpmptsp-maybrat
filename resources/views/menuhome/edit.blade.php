@foreach ($menuhome as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data Homepage</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formEditData{{ $item->id }}" action="{{ route('menuhome.update', ['menuhome' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_logo_dark{{ $item->id }}" class="col-form-label">Logo Dark:</label>
                        <input type="file" class="form-control" id="edit_logo_dark{{ $item->id }}" name="edit_logo_dark" accept="image/*">
                        <img src="{{ asset('storage/' . $item->logo_dark) }}" class="mt-2" style="max-width: 200px;" alt="Logo Dark">
                    </div>
                    <div class="form-group">
                        <label for="edit_logo_white{{ $item->id }}" class="col-form-label">Logo White:</label>
                        <input type="file" class="form-control" id="edit_logo_white{{ $item->id }}" name="edit_logo_white" accept="image/*">
                        <img src="{{ asset('storage/' . $item->logo_white) }}" class="mt-2" style="max-width: 200px;" alt="Logo White">
                    </div>
                    <div class="form-group">
                        <label for="edit_bg_hero{{ $item->id }}" class="col-form-label">Background Hero:</label>
                        <input type="file" class="form-control" id="edit_bg_hero{{ $item->id }}" name="edit_bg_hero" accept="image/*">
                        <img src="{{ asset('storage/' . $item->bg_hero) }}" class="mt-2" style="max-width: 200px;" alt="Background Hero">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_hero{{ $item->id }}" class="col-form-label">Title Hero:</label>
                        <input type="text" class="form-control" id="edit_title_hero{{ $item->id }}" name="edit_title_hero" placeholder="Masukkan Title Hero" value="{{ $item->title_hero }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_paragraf_hero{{ $item->id }}" class="col-form-label">Paragraf Hero:</label>
                        <textarea class="form-control" id="edit_paragraf_hero{{ $item->id }}" name="edit_paragraf_hero">{{ $item->paragraf_hero }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_img_profil{{ $item->id }}" class="col-form-label">Image Profil:</label>
                        <input type="file" class="form-control" id="edit_img_profil{{ $item->id }}" name="edit_img_profil" accept="image/*">
                        <img src="{{ asset('storage/' . $item->img_profil) }}" class="mt-2" style="max-width: 200px;" alt="Image Profil">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_profil{{ $item->id }}" class="col-form-label">Title Profil:</label>
                        <input type="text" class="form-control" id="edit_title_profil{{ $item->id }}" name="edit_title_profil" placeholder="Masukkan Title Profil" value="{{ $item->title_profil }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_fungsi{{ $item->id }}" class="col-form-label">Title Fungsi:</label>
                        <input type="text" class="form-control" id="edit_title_fungsi{{ $item->id }}" name="edit_title_fungsi" placeholder="Masukkan Title Fungsi" value="{{ $item->title_fungsi }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_tugas{{ $item->id }}" class="col-form-label">Title Tugas:</label>
                        <input type="text" class="form-control" id="edit_title_tugas{{ $item->id }}" name="edit_title_tugas" placeholder="Masukkan Title Tugas" value="{{ $item->title_tugas }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_layanan{{ $item->id }}" class="col-form-label">Title Layanan:</label>
                        <input type="text" class="form-control" id="edit_title_layanan{{ $item->id }}" name="edit_title_layanan" placeholder="Masukkan Title Layanan" value="{{ $item->title_layanan }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_paragraf_layanan{{ $item->id }}" class="col-form-label">Paragraf Layanan:</label>
                        <textarea class="form-control" id="edit_paragraf_layanan{{ $item->id }}" name="edit_paragraf_layanan">{{ $item->paragraf_layanan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_title_portal{{ $item->id }}" class="col-form-label">Title Portal:</label>
                        <input type="text" class="form-control" id="edit_title_portal{{ $item->id }}" name="edit_title_portal" placeholder="Masukkan Title Portal" value="{{ $item->title_portal }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_paragraf_portal{{ $item->id }}" class="col-form-label">Paragraf Portal:</label>
                        <textarea class="form-control" id="edit_paragraf_portal{{ $item->id }}" name="edit_paragraf_portal">{{ $item->paragraf_portal }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_title_berita{{ $item->id }}" class="col-form-label">Title Berita:</label>
                        <input type="text" class="form-control" id="edit_title_berita{{ $item->id }}" name="edit_title_berita" placeholder="Masukkan Title Berita" value="{{ $item->title_berita }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_paragraf_berita{{ $item->id }}" class="col-form-label">Paragraf Berita:</label>
                        <textarea class="form-control" id="edit_paragraf_berita{{ $item->id }}" name="edit_paragraf_berita">{{ $item->paragraf_berita }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_title_ucapan{{ $item->id }}" class="col-form-label">Title Ucapan:</label>
                        <input type="text" class="form-control" id="edit_title_ucapan{{ $item->id }}" name="edit_title_ucapan" placeholder="Masukkan Title Ucapan" value="{{ $item->title_ucapan }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_paragraf_ucapan{{ $item->id }}" class="col-form-label">Paragraf Ucapan:</label>
                        <textarea class="form-control" id="edit_paragraf_ucapan{{ $item->id }}" name="edit_paragraf_ucapan">{{ $item->paragraf_ucapan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_title_instansi{{ $item->id }}" class="col-form-label">Title Instansi:</label>
                        <input type="text" class="form-control" id="edit_title_instansi{{ $item->id }}" name="edit_title_instansi" placeholder="Masukkan Title Instansi" value="{{ $item->title_instansi }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_paragraf_instansi{{ $item->id }}" class="col-form-label">Paragraf Instansi:</label>
                        <textarea class="form-control" id="edit_paragraf_instansi{{ $item->id }}" name="edit_paragraf_instansi">{{ $item->paragraf_instansi }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
