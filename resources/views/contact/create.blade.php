{{-- Modal Tambah Data --}}
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Informasi</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahData" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_informasi" class="col-form-label">Masukkan Nama Informasi:</label>
                        <input type="text" class="form-control" id="nama_informasi" name="nama_informasi" placeholder="Contoh: Layanan Pengaduan">
                    </div>
                    <div class="form-group">
                        <label for="link" class="col-form-label">Masukkan Link:</label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="Contoh: http://example.com">
                    </div>
                    <div class="form-group">
                        <label for="detail" class="col-form-label">Masukkan Detail:</label>
                        <input type="text" class="form-control" id="detail" name="detail" placeholder="Contoh: no.telp/ alamat">
                    </div>
                    <div class="form-group">
                        <label for="icon" class="col-form-label">Pilih Icon:</label>
                        <input type="file" class="form-control" id="icon" name="icon" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_aktif" value="aktif" checked>
                            <label class="form-check-label" for="status_aktif">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_nonaktif" value="nonaktif">
                            <label class="form-check-label" for="status_nonaktif">Nonaktif</label>
                        </div>
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
