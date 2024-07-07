{{-- Modal Tambah Data tugas_dinas --}}
<div class="col-md-4">
    <!-- Modal Tambah Data tugas_dinas -->
    <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Tugas Dinas</h3>
                </div>
                <div class="modal-body">
                    <form id="formTambahData" action="{{ route('tugas_dinas.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="deskripsi" class="col-form-label">Masukkan Deskripsi Tugas DInas:</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Contoh: sebagai pintu membantu masyarakat">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Status tugas_dinas:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status_aktif" value="aktif" checked>
                                <label class="form-check-label" for="status_aktif">Aktif</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status_nonaktif" value="nonaktif">
                                <label class="form-check-label" for="status_nonaktif">Nonaktif</label>
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
