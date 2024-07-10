@foreach ($menuartikel as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Halaman Profil</h3>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formEditData{{ $item->id }}" action="{{ route('menuartikel.update', ['menuartikel' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_bg_hero{{ $item->id }}" class="col-form-label">BG Hero:</label>
                        <input type="file" class="form-control" id="edit_bg_hero{{ $item->id }}" name="edit_bg_hero" accept="image/*">
                        <img src="{{ asset('storage/' . $item->bg_hero) }}" class="mt-2" style="max-width: 200px;" alt="Background Hero">
                    </div>
                    <div class="form-group">
                        <label for="edit_title_hero{{ $item->id }}" class="col-form-label">Title Hero:</label>
                        <input type="text" class="form-control" id="edit_title_hero{{ $item->id }}" name="edit_title_hero" placeholder="Masukkan Title Hero" value="{{ $item->title_hero }}">
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
