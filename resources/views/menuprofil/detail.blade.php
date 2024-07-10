{{-- Modal Detail Data --}}
@foreach ($menuprofil as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Homepage</h3>
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
                <div class="form-group">
                    <label for="detail_img_visi" class="col-form-label">Image Visi:</label><br>
                    <img src="{{ asset('storage/' . $item->img_visi) }}" class="mt-2" style="max-width: 200px;" alt="image visi {{ $item->title_visi }}">
                </div>
                <div class="form-group">
                    <label for="detail_title_visi" class="col-form-label">Title Visi:</label>
                    <input type="text" class="form-control" id="detail_title_visi" name="detail_title_visi" value="{{ $item->title_visi }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_title_misi" class="col-form-label">Title Misi:</label>
                    <input type="text" class="form-control" id="detail_title_misi" name="detail_title_misi" value="{{ $item->title_misi }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_title_moto" class="col-form-label">Title Moto:</label>
                    <input type="text" class="form-control" id="detail_title_moto" name="detail_title_moto" value="{{ $item->title_moto }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_title_tugas" class="col-form-label">Title Tugas:</label>
                    <input type="text" class="form-control" id="detail_title_tugas" name="detail_title_tugas" value="{{ $item->title_tugas }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_title_fungsi" class="col-form-label">Title Fungsi:</label>
                    <input type="text" class="form-control" id="detail_title_fungsi" name="detail_title_fungsi" value="{{ $item->title_fungsi }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_title_program" class="col-form-label">Title Program:</label>
                    <input type="text" class="form-control" id="detail_title_program" name="detail_title_program" value="{{ $item->title_program }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_title_publikasi" class="col-form-label">Title Publikasi:</label>
                    <input type="text" class="form-control" id="detail_title_publikasi" name="detail_title_publikasi" value="{{ $item->title_publikasi }}" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
