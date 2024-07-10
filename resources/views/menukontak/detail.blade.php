{{-- Modal Detail Data --}}
@foreach ($menukontak as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Halaman Kontak</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_bg_hero" class="col-form-label">Background Hero:</label><br>
                    <img src="{{ asset('storage/' . $item->bg_hero) }}" class="mt-2" style="max-width: 200px;" alt="background hero {{ $item->title_hero }}">
                </div>
                <div class="form-group">
                    <label for="detail_title_hero" class="col-form-label">Title Hero:</label>
                    <input type="text" class="form-control" id="detail_title_hero" name="detail_title_hero" value="{{ $item->title_hero }}" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
