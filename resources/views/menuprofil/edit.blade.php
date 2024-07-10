@foreach ($menuprofil as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Halaman Profil</h3>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formEditData{{ $item->id }}" action="{{ route('menuprofil.update', ['menuprofil' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_bg_hero{{ $item->id }}" class="col-form-label">BG Hero:</label>
                        <input type="file" class="form-control" id="edit_bg_hero{{ $item->id }}" name="edit_bg_hero" accept="image/*">
                        <img src="{{ asset('storage/' . $item->bg_hero) }}" class="mt-2" style="max-width: 200px;" alt="Background Hero">
                    </div>
                    <div class="form-group">
                        <label for="edit_img_visi{{ $item->id }}" class="col-form-label">Img Section:</label>
                        <input type="file" class="form-control" id="edit_img_visi{{ $item->id }}" name="edit_img_visi" accept="image/*">
                        <img src="{{ asset('storage/' . $item->img_visi) }}" class="mt-2" style="max-width: 200px;" alt="Img Section">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_hero{{ $item->id }}" class="col-form-label">Title Hero:</label>
                        <input type="text" class="form-control" id="edit_title_hero{{ $item->id }}" name="edit_title_hero" placeholder="Masukkan Title Hero" value="{{ $item->title_hero }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_visi{{ $item->id }}" class="col-form-label">Title visi:</label>
                        <input type="text" class="form-control" id="edit_title_visi{{ $item->id }}" name="edit_title_visi" placeholder="Masukkan Title visi" value="{{ $item->title_visi }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_misi{{ $item->id }}" class="col-form-label">Title misi:</label>
                        <input type="text" class="form-control" id="edit_title_misi{{ $item->id }}" name="edit_title_misi" placeholder="Masukkan Title misi" value="{{ $item->title_misi }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_moto{{ $item->id }}" class="col-form-label">Title moto:</label>
                        <input type="text" class="form-control" id="edit_title_moto{{ $item->id }}" name="edit_title_moto" placeholder="Masukkan Title moto" value="{{ $item->title_moto }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_tugas{{ $item->id }}" class="col-form-label">Title tugas:</label>
                        <input type="text" class="form-control" id="edit_title_tugas{{ $item->id }}" name="edit_title_tugas" placeholder="Masukkan Title tugas" value="{{ $item->title_tugas }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_fungsi{{ $item->id }}" class="col-form-label">Title fungsi:</label>
                        <input type="text" class="form-control" id="edit_title_fungsi{{ $item->id }}" name="edit_title_fungsi" placeholder="Masukkan Title fungsi" value="{{ $item->title_fungsi }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_program{{ $item->id }}" class="col-form-label">Title program:</label>
                        <input type="text" class="form-control" id="edit_title_program{{ $item->id }}" name="edit_title_program" placeholder="Masukkan Title program" value="{{ $item->title_program }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_publikasi{{ $item->id }}" class="col-form-label">Title publikasi:</label>
                        <input type="text" class="form-control" id="edit_title_publikasi{{ $item->id }}" name="edit_title_publikasi" placeholder="Masukkan Title publikasi" value="{{ $item->title_publikasi }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
