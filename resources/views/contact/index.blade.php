<!DOCTYPE html>
    <html lang="en">
    @include('layouts.head')

    <body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    @include('layouts.sidebar')
    <main class="main-content position-relative border-radius-lg">
        @include('layouts.navbar')
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Data Contact</h4>
                            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#tambahData"><i class="fa-solid fa-plus me-2"></i>Tambah Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0 displayw" id="example" style="width:100%">
                                    <thead>
                                        <tr>
                                            {{-- <th></th> --}}
                                            <th class="text-uppercase text-primary text-sm font-weight-bold">Nama Informasi</th>
                                            <th class="text-uppercase text-primary text-sm font-weight-bold">Detail</th>
                                            <th class="text-uppercase text-primary text-sm font-weight-bold">Icon</th>
                                            <th class="text-center text-uppercase text-primary text-sm font-weight-bold">Status</th>
                                            <th class="text-center text-uppercase text-primary text-sm font-weight-bold">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contact as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->nama_informasi }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ $item->detail }}" class="text-xs font-weight-bold fot" target="_blank">{{ $item->detail }}</a>
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/' . $item->icon) }}" class="avatar avatar-xl me-2" alt="gambar {{ $item->nama_informasi }}">
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-sm {{ $item->status == 'aktif' ? 'bg-gradient-success' : 'bg-gradient-danger' }}">
                                                    {{ $item->status == 'aktif' ? 'Aktif' : 'Tidak Aktif' }}
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <!-- Tombol Detail -->
                                                    <button type="button" class="btn btn-link text-secondary mb-0" data-bs-toggle="modal" data-bs-target="#detailData{{ $item->id }}">
                                                        <i class="fa-solid fa-circle-info text-info fa-lg"></i>
                                                    </button>

                                                    <!-- Tombol Edit -->
                                                    <button type="button" class="btn btn-link text-secondary mb-0" data-bs-toggle="modal" data-bs-target="#editData{{ $item->id }}">
                                                        <i class="fa-solid fa-pen-to-square text-primary fa-lg"></i>
                                                    </button>
                                                    <!-- Tombol Hapus -->
                                                    <button type="button" class="btn btn-link text-secondary mb-0" data-bs-toggle="modal" data-bs-target="#deleteData{{ $item->id }}">
                                                        <i class="fa-solid fa-trash text-danger fa-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Include modal -->
    @include('contact.detail')
    @include('contact.create')
    @include('contact.delete')
    @include('contact.edit')

    @include('layouts.setting-theme')
    @include('layouts.script')
    </body>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</html>
