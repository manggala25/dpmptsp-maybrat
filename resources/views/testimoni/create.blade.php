{{-- Modal Tambah Data --}}
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Testimoni</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahData" action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Testimoni">
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="col-form-label">Jabatan:</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="ucapan" class="col-form-label">Ucapan:</label>
                        <textarea class="form-control" id="ucapan" name="ucapan" rows="4" placeholder="Masukkan Ucapan Testimoni"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto" class="col-form-label">Foto:</label>
                        <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
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
