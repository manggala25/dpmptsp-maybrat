{{-- Modal Tambah Data dokumen --}}
<div class="col-md-4">
    <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="font-weight-bolder text-info text-gradient">Tambah Data dokumen</h3>
                </div>
                <div class="modal-body">
                    <form id="formTambahData" action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_dokumen" class="col-form-label">Nama dokumen:</label>
                            <input type="text" class="form-control" id="nama_dokumen" name="nama_dokumen" placeholder="Contoh: dokumen Konsultasi" required>
                        </div>
                        <div class="form-group">
                            <label for="file_dokumen" class="col-form-label">File Dokumen:</label>
                            <input type="file" class="form-control" id="file_dokumen" name="file_dokumen" required>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-form-label">Status dokumen:</label><br>
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
