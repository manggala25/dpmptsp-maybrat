<!-- Modal Tambah Data -->
<div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="font-weight-bolder text-info text-gradient">Buat Data Halaman Beranda</h3>
                </div>
                <div class="modal-body">
                    <form id="formTambahData" action="{{ route('menuhome.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="logo_dark" class="col-form-label">Logo Dark:</label>
                            <input type="file" class="form-control" id="logo_dark" name="logo_dark" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="logo_white" class="col-form-label">Logo White:</label>
                            <input type="file" class="form-control" id="logo_white" name="logo_white" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="bg_hero" class="col-form-label">Background Hero:</label>
                            <input type="file" class="form-control" id="bg_hero" name="bg_hero" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="title_hero" class="col-form-label">Title Hero:</label>
                            <input type="text" class="form-control" id="title_hero" name="title_hero" placeholder="Masukkan Title Hero">
                        </div>
                        <div class="form-group">
                            <label for="paragraf_hero" class="col-form-label">Paragraf Hero:</label>
                            <textarea class="form-control" id="paragraf_hero" name="paragraf_hero" rows="3" placeholder="Masukkan Paragraf Hero"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="img_profil" class="col-form-label">Image Profil:</label>
                            <input type="file" class="form-control" id="img_profil" name="img_profil" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="title_profil" class="col-form-label">Title Profil:</label>
                            <input type="text" class="form-control" id="title_profil" name="title_profil" placeholder="Masukkan Title Profil">
                        </div>
                        <div class="form-group">
                            <label for="title_fungsi" class="col-form-label">Title Fungsi:</label>
                            <input type="text" class="form-control" id="title_fungsi" name="title_fungsi" placeholder="Masukkan Title Fungsi">
                        </div>
                        <div class="form-group">
                            <label for="title_tugas" class="col-form-label">Title Tugas:</label>
                            <input type="text" class="form-control" id="title_tugas" name="title_tugas" placeholder="Masukkan Title Tugas">
                        </div>
                        <div class="form-group">
                            <label for="title_layanan" class="col-form-label">Title Layanan:</label>
                            <input type="text" class="form-control" id="title_layanan" name="title_layanan" placeholder="Masukkan Title Layanan">
                        </div>
                        <div class="form-group">
                            <label for="paragraf_layanan" class="col-form-label">Paragraf Layanan:</label>
                            <textarea class="form-control" id="paragraf_layanan" name="paragraf_layanan" rows="3" placeholder="Masukkan Paragraf Layanan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title_portal" class="col-form-label">Title Portal:</label>
                            <input type="text" class="form-control" id="title_portal" name="title_portal" placeholder="Masukkan Title Portal">
                        </div>
                        <div class="form-group">
                            <label for="paragraf_portal" class="col-form-label">Paragraf Portal:</label>
                            <textarea class="form-control" id="paragraf_portal" name="paragraf_portal" rows="3" placeholder="Masukkan Paragraf Portal"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title_berita" class="col-form-label">Title Berita:</label>
                            <input type="text" class="form-control" id="title_berita" name="title_berita" placeholder="Masukkan Title Berita">
                        </div>
                        <div class="form-group">
                            <label for="paragraf_berita" class="col-form-label">Paragraf Berita:</label>
                            <textarea class="form-control" id="paragraf_berita" name="paragraf_berita" rows="3" placeholder="Masukkan Paragraf Berita"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title_ucapan" class="col-form-label">Title Ucapan:</label>
                            <input type="text" class="form-control" id="title_ucapan" name="title_ucapan" placeholder="Masukkan Title Ucapan">
                        </div>
                        <div class="form-group">
                            <label for="paragraf_ucapan" class="col-form-label">Paragraf Ucapan:</label>
                            <textarea class="form-control" id="paragraf_ucapan" name="paragraf_ucapan" rows="3" placeholder="Masukkan Paragraf Ucapan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title_instansi" class="col-form-label">Title Instansi:</label>
                            <input type="text" class="form-control" id="title_instansi" name="title_instansi" placeholder="Masukkan Title Instansi">
                        </div>
                        <div class="form-group">
                            <label for="paragraf_instansi" class="col-form-label">Paragraf Instansi:</label>
                            <textarea class="form-control" id="paragraf_instansi" name="paragraf_instansi" rows="3" placeholder="Masukkan Paragraf Instansi"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn bg-gradient-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
