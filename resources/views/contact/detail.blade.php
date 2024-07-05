{{-- Modal Detail Data --}}
@foreach ($contact as $contact)
<div class="modal fade" id="detailData{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle{{ $contact->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Detail Data Informasi</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detail_nama_informasi" class="col-form-label">Nama Informasi:</label>
                    <input type="text" class="form-control" id="detail_nama_informasi" name="detail_nama_informasi" value="{{ $contact->nama_informasi }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_link" class="col-form-label">Link:</label>
                    <input type="text" class="form-control" id="detail_link" name="detail_link" value="{{ $contact->link }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_detail" class="col-form-label">Detail:</label>
                    <input type="text" class="form-control" id="detail_detail" name="detail_detail" value="{{ $contact->detail }}" readonly>
                </div>
                <div class="form-group">
                    <label for="detail_icon" class="col-form-label">Icon:</label><br>
                    <img src="{{ asset('storage/' . $contact->icon) }}" class="mt-2" style="max-width: 200px;" alt="icon {{ $contact->nama_informasi }}">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Status:</label><br>
                    <input type="text" class="form-control" value="{{ $contact->status == 'aktif' ? 'Aktif' : 'Nonaktif' }}" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
