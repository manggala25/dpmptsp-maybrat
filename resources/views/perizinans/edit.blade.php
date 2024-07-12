{{-- Modal Edit Data Perizinan --}}
@foreach ($perizinan as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Data Perizinan</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData{{ $item->id }}" action="{{ route('perizinans.update', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_izin" class="col-form-label">Nama Perizinan:</label>
                        <input type="text" class="form-control" id="nama_izin" name="nama_izin" value="{{ $item->nama_izin }}">
                    </div>
                    <div class="form-group">
                        <label for="bidang_izin" class="col-form-label">Bidang Izin:</label>
                        <input type="text" class="form-control" id="bidang_izin" name="bidang_izin" value="{{ $item->bidang_izin }}">
                    </div>
                    <div class="form-group">
                        <label for="masa_berlaku" class="col-form-label">Masa Berlaku:</label>
                        <input type="text" class="form-control" id="masa_berlaku" name="masa_berlaku" value="{{ $item->masa_berlaku }}">
                    </div>
                    <div class="form-group">
                        <label for="lama_proses" class="col-form-label">Lama Proses:</label>
                        <input type="text" class="form-control" id="lama_proses" name="lama_proses" value="{{ $item->lama_proses }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status Perizinan:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_aktif" value="aktif" {{ $item->status == 'aktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_aktif">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_nonaktif" value="nonaktif" {{ $item->status == 'nonaktif' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_nonaktif">Nonaktif</label>
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
