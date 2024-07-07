{{-- Modal Tambah Data Layanan --}}
<div class="col-md-4">
    <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Layanan</h3>
                </div>
                <div class="modal-body">
                    <form id="formTambahData" action="{{ route('layanan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_layanan" class="col-form-label">Nama Layanan:</label>
                            <input type="text" class="form-control" id="nama_layanan" name="nama_layanan" placeholder="Contoh: Layanan Konsultasi">
                        </div>
                        <div class="form-group">
                            <label for="icon" class="col-form-label">Icon:</label>
                            <input type="text" class="form-control" id="icon" name="icon" placeholder="Contoh: fas fa-home">
                        </div>
                        {{-- <div class="form-group">
                            <label for="slug" class="col-form-label">Slug:</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Contoh: layanan-konsultasi">
                        </div> --}}
                        <div class="form-group">
                            <label for="deskripsi" class="col-form-label">Deskripsi Layanan:</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Contoh: Layanan untuk konsultasi masyarakat"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Status Layanan:</label><br>
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
</div>
