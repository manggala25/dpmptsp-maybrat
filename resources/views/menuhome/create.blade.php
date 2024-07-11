{{-- Modal Tambah Data --}}
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
                            <label for="bg_hero" class="col-form-label">Background Hero:</label>
                            <input type="file" class="form-control" id="bg_hero" name="bg_hero" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="title_hero" class="col-form-label">Title Hero:</label>
                            <input type="text" class="form-control" id="title_hero" name="title_hero" placeholder="Masukkan Title Hero">
                        </div>
                        <div class="form-group">
                            <label for="img_visi" class="col-form-label">Image Visi:</label>
                            <input type="file" class="form-control" id="img_visi" name="img_visi" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="title_visi" class="col-form-label">Title Visi:</label>
                            <input type="text" class="form-control" id="title_visi" name="title_visi" placeholder="Masukkan Title Visi">
                        </div>
                        <div class="form-group">
                            <label for="title_misi" class="col-form-label">Title Misi:</label>
                            <input type="text" class="form-control" id="title_misi" name="title_misi" placeholder="Masukkan Title Misi">
                        </div>
                        <div class="form-group">
                            <label for="title_moto" class="col-form-label">Title Moto:</label>
                            <input type="text" class="form-control" id="title_moto" name="title_moto" placeholder="Masukkan Title Moto">
                        </div>
                        <div class="form-group">
                            <label for="title_tugas" class="col-form-label">Title Tugas:</label>
                            <input type="text" class="form-control" id="title_tugas" name="title_tugas" placeholder="Masukkan Title Tugas">
                        </div>
                        <div class="form-group">
                            <label for="title_fungsi" class="col-form-label">Title Fungsi:</label>
                            <input type="text" class="form-control" id="title_fungsi" name="title_fungsi" placeholder="Masukkan Title Fungsi">
                        </div>
                        <div class="form-group">
                            <label for="title_program" class="col-form-label">Title Program:</label>
                            <input type="text" class="form-control" id="title_program" name="title_program" placeholder="Masukkan Title Program">
                        </div>
                        <div class="form-group">
                            <label for="title_publikasi" class="col-form-label">Title Publikasi:</label>
                            <input type="text" class="form-control" id="title_publikasi" name="title_publikasi" placeholder="Masukkan Title Publikasi">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-primary" form="formTambahData">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
