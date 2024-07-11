{{-- Modal Edit Data fungsi --}}
@foreach ($jam_layanan as $item)
<div class="modal fade" id="editData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editDataTitle{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="font-weight-bolder text-info text-gradient">Edit Jam Pelayanan</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- Formulir di luar loop @foreach --}}
                <form id="formEditData{{ $item->id }}" action="{{ route('jam_layanan.update', ['jam_layanan' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_hari" class="col-form-label">nama_hari</label>
                        <input type="text" class="form-control" id="nama_hari" name="nama_hari" value="{{ $item->nama_hari }}">
                    </div>
                    <div class="form-group">
                        <label for="jam_buka" class="col-form-label">Waktu Mulai:</label>
                        <input type="time" class="form-control" id="jam_buka" name="jam_buka" value="{{ old('jam_buka', $item->jam_buka) }}">
                    </div>
                    <div class="form-group">
                        <label for="jam_tutup" class="col-form-label">Waktu Selesai:</label>
                        <input type="time" class="form-control" id="jam_tutup" name="jam_tutup" value="{{ old('jam_tutup', $item->jam_tutup) }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status fungsi:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_buka_{{ $item->id }}" value="buka" {{ $item->status == 'buka' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_buka_{{ $item->id }}">buka</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status_libur_{{ $item->id }}" value="libur" {{ $item->status == 'libur' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_libur_{{ $item->id }}">libur</label>
                        </div>
                    </div>
                
                    {{-- Tombol Update di dalam form --}}
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-gradient-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
