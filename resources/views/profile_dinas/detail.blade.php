{{-- Modal Detail Data --}}
@foreach ($profile_dinas as $item)
<div class="modal fade" id="detailData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Profile Dinas</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_nama_dinas" class="col-form-label">Nama Dinas:</label>
                    <input type="text" class="form-control" id="detail_nama_dinas" name="detail_nama_dinas" value="{{ $item->nama_dinas }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_deskripsi" class="col-form-label">Deskripsi:</label>
                    <textarea class="form-control" id="detail_deskripsi" name="detail_deskripsi" readonly>{{ $item->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_dasarhukum" class="col-form-label">Dasar Hukum:</label>
                    <textarea class="form-control" id="detail_dasarhukum" name="detail_dasarhukum" readonly>{{ $item->dasarhukum }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_visi" class="col-form-label">Visi:</label>
                    <textarea class="form-control" id="detail_visi" name="detail_visi" readonly>{{ $item->visi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_misi" class="col-form-label">Misi:</label>
                    <textarea class="form-control" id="detail_misi" name="detail_misi" readonly>{{ $item->misi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_tujuan" class="col-form-label">Tujuan:</label>
                    <textarea class="form-control" id="detail_tujuan" name="detail_tujuan" readonly>{{ $item->tujuan }}</textarea>
                </div>
                <div class="form-group">
                    <label for="detail_gambar_strukturorganisasi" class="col-form-label">Gambar Struktur Organisasi:</label><br>
                    <img src="{{ asset('storage/' . $item->gambar_strukturorganisasi) }}" class="mt-2" style="max-width: 200px;" alt="gambar struktur organisasi {{ $item->nama_dinas }}">
                </div>
                <div class="form-group">
                    <label for="detail_logo_dinas" class="col-form-label">Logo Dinas:</label><br>
                    <img src="{{ asset('storage/' . $item->logo_dinas) }}" class="mt-2" style="max-width: 200px;" alt="logo dinas {{ $item->nama_dinas }}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
