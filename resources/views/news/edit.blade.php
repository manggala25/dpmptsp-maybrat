{{-- Modal Edit Berita --}}
@foreach ($news as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Berita</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $item->id }}" action="{{ route('berita.update', ['berita' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="edit_judul" class="col-form-label">Judul:</label>
                        <input type="text" class="form-control" id="edit_judul" name="edit_judul" value="{{ $item->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_slug" class="col-form-label">Slug:</label>
                        <input type="text" class="form-control" id="edit_slug" name="edit_slug" value="{{ $item->slug }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_isi" class="col-form-label">Isi Berita:</label>
                        <textarea class="form-control" id="edit_isi" name="edit_isi">{{ $item->isi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_gambar_berita" class="col-form-label">Pilih Gambar Berita:</label>
                        <input type="file" class="form-control" id="edit_gambar_berita" name="edit_gambar_berita" accept="image/*">
                        <img src="{{ asset('storage/' . $item->gambar_berita) }}" class="mt-2" style="max-width: 200px;" alt="gambar {{ $item->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_penulis" class="col-form-label">Penulis:</label>
                        <input type="text" class="form-control" id="edit_penulis" name="edit_penulis" value="{{ $item->penulis }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_kategori" class="col-form-label">Kategori:</label>
                        <input type="text" class="form-control" id="edit_kategori" name="edit_kategori" value="{{ $item->kategori }}">
                    </div>
                    <div class="form-group">
                        <label for="edit_tanggal_publikasi" class="col-form-label">Tanggal Publikasi:</label>
                        <input type="datetime-local" class="form-control" id="edit_tanggal_publikasi" name="edit_tanggal_publikasi" value="{{ \Carbon\Carbon::parse($item->tanggal_publikasi)->format('Y-m-d\TH:i') }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_draft{{ $item->id }}" value="draft" {{ $item->status == 'draft' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_draft{{ $item->id }}">Draft</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_published{{ $item->id }}" value="published" {{ $item->status == 'published' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_published{{ $item->id }}">Published</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_status" id="edit_status_archived{{ $item->id }}" value="archived" {{ $item->status == 'archived' ? 'checked' : '' }}>
                            <label class="form-check-label" for="edit_status_archived{{ $item->id }}">Archived</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-primary" form="formEditData{{ $item->id }}">Update</button>
            </div>
        </div>
    </div>
</div>
@endforeach
