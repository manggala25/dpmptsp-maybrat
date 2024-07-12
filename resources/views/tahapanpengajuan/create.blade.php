{{-- Modal Tambah Data --}}
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Informasi</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahData" action="{{ route('tahapanpengajuan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_tahapan" class="col-form-label">Masukkan Nama Tahapan:</label>
                        <input type="text" class="form-control" id="nama_tahapan" name="nama_tahapan" placeholder="Contoh: Proses Pengajuan">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi" class="col-form-label">Masukkan Deskripsi:</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi Tahapan">
                    </div>
                    <div class="form-group">
                        <label for="urutan" class="col-form-label">Masukkan Urutan:</label>
                        <input type="number" min="1" max="10" class="form-control" id="urutan" name="urutan" placeholder="Masukan urutan Tahapan">
                    </div>
                    <div class="form-group">
                        <label for="icon" class="col-form-label">Pilih Icon:</label>
                        <input type="file" class="form-control" id="icon" name="icon" accept="image/*">
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
