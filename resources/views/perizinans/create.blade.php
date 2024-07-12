{{-- Modal Tambah Data Perizinan --}}
<div class="col-md-4">
    <!-- Modal Tambah Data Perizinan -->
    <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Perizinan</h3>
                </div>
                <div class="modal-body">
                    <form id="formTambahData" action="{{ route('perizinans.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_izin" class="col-form-label">Nama Izin:</label>
                            <input type="text" class="form-control" id="nama_izin" name="nama_izin" placeholder="Masukkan Nama Izin" required>
                        </div>
                        <div class="form-group">
                            <label for="bidang_izin" class="col-form-label">Bidang Izin:</label>
                            <input type="text" class="form-control" id="bidang_izin" name="bidang_izin" placeholder="Masukkan Bidang Izin" required>
                        </div>
                        <div class="form-group">
                            <label for="masa_berlaku" class="col-form-label">Masa Berlaku:</label>
                            <input type="text" class="form-control" id="masa_berlaku" name="masa_berlaku" placeholder="Masukkan Masa Berlaku" required>
                        </div>
                        <div class="form-group">
                            <label for="lama_proses" class="col-form-label">Lama Proses:</label>
                            <input type="text" class="form-control" id="lama_proses" name="lama_proses" placeholder="Masukkan Lama Proses" required>
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
                        <!-- Hidden input for slug generation -->
                        <input type="hidden" id="slug" name="slug" value="{{ old('slug') }}">
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
