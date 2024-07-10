{{-- Modal Tambah Data --}}
<div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Profil Page</h3>
                </div>
                <div class="modal-body">
                    <form id="formTambahData" action="{{ route('menuartikel.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="bg_hero" class="col-form-label">Background Hero:</label>
                            <input type="file" class="form-control" id="bg_hero" name="bg_hero" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="title_hero" class="col-form-label">Title Hero:</label>
                            <input type="text" class="form-control" id="title_hero" name="title_hero" placeholder="Masukkan Title Hero">
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
