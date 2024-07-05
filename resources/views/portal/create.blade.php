{{-- Modal Tambah Data --}}
    <div class="col-md-4">
        <!-- Modal -->
        <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Portal</h3>
                </div>
                <div class="modal-body">
                <form id="formTambahData" action="{{ route('portal.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label for="nama_portal" class="col-form-label">Masukkan Nama Portal:</label>
                    <input type="text" class="form-control" id="nama_portal" name="nama_portal" placeholder="Contoh: Layanan Pengaduan">
                    </div>
                    <div class="form-group">
                    <label for="link_portal" class="col-form-label">Masukkan Link Portal:</label>
                    <input type="text" class="form-control" id="link_portal" name="link_portal" placeholder="Contoh: http://example.com">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status Portal:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_aktif" value="aktif" checked>
                            <label class="form-check-label" for="status_aktif">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_nonaktif" value="nonaktif">
                            <label class="form-check-label" for="status_nonaktif">Nonaktif</label>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="deskripsi_portal" class="col-form-label">Masukkan Deskripsi Portal:</label>
                    <textarea class="form-control" id="deskripsi_portal" name="deskripsi_portal"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="gambar_portal" class="col-form-label">Pilih Gambar Portal:</label>
                    <input type="file" class="form-control" id="gambar_portal" name="gambar_portal" accept="image/*">
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