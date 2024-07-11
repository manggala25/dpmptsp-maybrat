{{-- Modal Detail Data dokumen --}}
@foreach ($dokumen as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Dokumen</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_nama_dokumen{{ $item->id }}" class="col-form-label">Nama dokumen:</label>
                    <input type="text" class="form-control" id="detail_nama_dokumen{{ $item->id }}" name="detail_nama_dokumen" value="{{ $item->nama_dokumen }}" readonly>
                </div>
                <div class="form-group d-flex">
                    <label for="detail_file_dokumen{{ $item->id }}" class="col-form-label">File Dokumen:</label>
                    <a href="{{ asset('storage/' . $item->file_dokumen) }}" class="btn btn-primary" target="_blank">Lihat Dokumen</a>
                </div>
                <div class="form-group">
                    <label for="detail_slug{{ $item->id }}" class="col-form-label">Slug:</label>
                    <input type="text" class="form-control" id="detail_slug{{ $item->id }}" name="detail_slug" value="{{ $item->slug }}" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Status dokumen:</label><br>
                    <input type="text" class="form-control" value="{{ $item->status == 'aktif' ? 'Aktif' : 'Nonaktif' }}" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
