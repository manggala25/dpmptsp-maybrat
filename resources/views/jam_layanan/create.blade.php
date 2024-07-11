<!-- Modal Tambah Data fungsi -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah Waktu Pelayanan</h3>
            </div>
            <form id="formTambahData" action="{{ route('jam_layanan.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_hari" class="col-form-label">Pilih Hari:</label>
                        <select class="form-control" id="nama_hari" name="nama_hari">
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="waktu_mulai" class="col-form-label">Waktu Mulai:</label>
                        <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai">
                    </div>
                    <div class="form-group">
                        <label for="waktu_selesai" class="col-form-label">Waktu Selesai:</label>
                        <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_buka" value="buka" checked>
                            <label class="form-check-label" for="status_buka">Buka</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_libur" value="libur">
                            <label class="form-check-label" for="status_libur">Libur</label>
                        </div>
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
