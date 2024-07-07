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
              <h4 class="card-title">Data Profile Dinas</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table align-items-center mb-0" id="example" style="width:100%">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-primary text-sm font-weight-bold">Nama Dinas</th>
                      {{-- <th class="text-uppercase text-primary text-sm font-weight-bold">Deskripsi</th> --}}
                      <th class="text-uppercase text-primary text-sm font-weight-bold">Visi</th>
                      <th class="text-uppercase text-primary text-sm font-weight-bold">Misi</th>
                      <th class="text-center text-uppercase text-primary text-sm font-weight-bold">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($profile_dinas as $item)
                    <tr>
                      <td>
                        <h6 class="mb-0 text-sm">{{ $item->nama_dinas }}</h6>
                      </td>
                      {{-- <td>
                        <p class="text-xs text-justify font-weight-bold wrap-text" style="max-width: 20rem; word-wrap: break-word; white-space: normal;">{{ $item->deskripsi }}</p>
                      </td> --}}
                      <td>
                        <p class="text-xs text-justify font-weight-bold wrap-text" style="max-width: 10rem; word-wrap: break-word; white-space: normal;">{{ $item->visi }}</p>
                      </td>
                      <td>
                        <p class="text-xs text-justify font-weight-bold wrap-text" style="max-width: 10rem; word-wrap: break-word; white-space: normal;">{{ $item->misi }}</p>
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

  @include('profile_dinas.detail')
  @include('profile_dinas.edit')

  @include('layouts.setting-theme')
  @include('layouts.script')
</body>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
</html>
