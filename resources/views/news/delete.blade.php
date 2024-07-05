    {{-- Modal hapus --}}
    @foreach ($news as $item)
    <!-- Modal Hapus Data -->
    <div class="modal fade" id="deleteData{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteDataTitle{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteDataTitle{{ $item->id }}">Hapus Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <i class="fa-solid fa-trash text-danger fa-3x"></i>
                        <h4 class="text-gradient text-danger mt-4">Yakin Ingin Menghapus?</h4>
                        <p>Judul Berita: {{ $item->judul }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('news.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn bg-gradient-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach