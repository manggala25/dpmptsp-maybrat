{{-- Modal Tambah Kategori Persyaratan --}}
<div class="col-md-4">
    <!-- Modal Tambah Kategori Persyaratan -->
    <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="font-weight-bolder text-info text-gradient">Tambah Kategori Persyaratan</h3>
                </div>
                <div class="modal-body">
                    <form id="formTambahData" action="{{ route('kategoripersyaratan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kategori" class="col-form-label">Nama Kategori:</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan Nama Kategori" required>
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
