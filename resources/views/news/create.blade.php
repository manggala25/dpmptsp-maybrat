{{-- Modal Tambah Data --}}
<div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="font-weight-bolder text-info text-gradient">Tambah Berita</h3>
                </div>
                <div class="modal-body">
                    <form id="formTambahData" action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul" class="col-form-label">Judul:</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Berita">
                        </div>
                        <div class="form-group">
                            <label for="slug" class="col-form-label">Slug:</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Contoh: judul-berita">
                        </div>
                        <div class="form-group">
                            <label for="isi" class="col-form-label">Isi Berita:</label>
                            <textarea class="form-control" id="isi" name="isi" placeholder="Masukkan isi berita"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar_berita" class="col-form-label">Pilih Gambar Berita:</label>
                            <input type="file" class="form-control" id="gambar_berita" name="gambar_berita" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="penulis" class="col-form-label">Penulis:</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan Nama Penulis">
                        </div>
                        <div class="form-group">
                            <label for="kategori" class="col-form-label">Kategori:</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Contoh: Politik">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_publikasi" class="col-form-label">Tanggal Publikasi:</label>
                            <input type="datetime-local" class="form-control" id="tanggal_publikasi" name="tanggal_publikasi">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Status:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status_draft" value="draft" checked>
                                <label class="form-check-label" for="status_draft">Draft</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status_published" value="published">
                                <label class="form-check-label" for="status_published">Published</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status_archived" value="archived">
                                <label class="form-check-label" for="status_archived">Archived</label>
                            </div>
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
