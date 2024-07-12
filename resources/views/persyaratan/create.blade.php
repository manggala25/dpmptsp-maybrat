<!-- Modal Tambah Data Persyaratan -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Persyaratan</h3>
            </div>
            <div class="modal-body">
                <form id="formTambahData" action="{{ route('persyaratan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="perizinan_id" class="col-form-label">Perizinan:</label>
                        <select class="form-select form-control" id="perizinan_id" name="perizinan_id" required>
                            <option selected disabled>Pilih Nama Izin</option>
                            @foreach ($perizinan as $izin)
                                <option value="{{ $izin->id }}">{{ $izin->nama_izin }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kategori_persyaratan_id" class="col-form-label">Kategori Persyaratan:</label>
                        <select class="form-select form-control" id="kategori_persyaratan_id" name="kategori_persyaratan_id" required>
                            <option selected disabled>Pilih Kategori</option>
                            @foreach ($kategoriPersyaratan as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="persyaratan" class="col-form-label">Persyaratan:</label>
                        <input type="text" class="form-control" id="persyaratan" name="persyaratan" placeholder="Masukkan Persyaratan" required>
                    </div>

                    <div class="form-group">
                        <label for="keterangan" class="col-form-label">Keterangan:</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="template_file" class="col-form-label">Template File:</label>
                        <input type="file" class="form-control" id="template_file" name="template_file">
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
