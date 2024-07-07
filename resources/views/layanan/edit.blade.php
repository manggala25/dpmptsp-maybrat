{{-- Modal Edit Data Layanan --}}
@foreach ($layanan as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data Layanan</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $item->id }}" action="{{ route('layanan.update', ['layanan' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_layanan{{ $item->id }}" class="col-form-label">Nama Layanan</label>
                        <input type="text" class="form-control" id="nama_layanan{{ $item->id }}" name="nama_layanan" value="{{ $item->nama_layanan }}">
                    </div>
                    <div class="form-group">
                        <label for="icon{{ $item->id }}" class="col-form-label">Icon</label>
                        <input type="text" class="form-control" id="icon{{ $item->id }}" name="icon" value="{{ $item->icon }}">
                    </div>
                    <div class="form-group">
                        <label for="slug{{ $item->id }}" class="col-form-label">Slug</label>
                        <input type="text" class="form-control" id="slug{{ $item->id }}" name="slug" value="{{ $item->slug }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi{{ $item->id }}" class="col-form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi{{ $item->id }}" name="deskripsi">{{ $item->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status Layanan:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_aktif{{ $item->id }}" value="aktif" {{ $item->status == 'aktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_aktif{{ $item->id }}">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_nonaktif{{ $item->id }}" value="nonaktif" {{ $item->status == 'nonaktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_nonaktif{{ $item->id }}">Nonaktif</label>
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
