<div class="container-fluid py-4">
    <div class="row">

        <!-- Card Jumlah Berita -->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Berita Di Publish</p>
                                <h5 class="font-weight-bolder">
                                    {{ $jumlahBerita }}
                                </h5>
                                <p class="mb-0">
                                    Total Publish
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Jumlah Partner -->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Partner Yang aktif</p>
                                <h5 class="font-weight-bolder">
                                    {{ $jumlahPartner }}
                                </h5>
                                <p class="mb-0">
                                    Total Partner
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Jumlah Layanan -->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Layanan Yang aktif</p>
                                <h5 class="font-weight-bolder">
                                    {{ $jumlahLayanan }}
                                </h5>
                                <p class="mb-0">
                                    Total Layanan
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                <i class="ni ni-folder-17 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Jumlah Portal -->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Portal Yang aktif</p>
                                <h5 class="font-weight-bolder">
                                    {{ $jumlahPortal }}
                                </h5>
                                <p class="mb-0">
                                    Total Portal
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Data Perizinan</h6>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center ">
                <tbody>
                    @foreach ($perizinans as $item)
                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div class="ms-4">
                          <p class="text-xs font-weight-bold mb-0">Nama Perizinan:</p>
                          <h6 class="text-sm mb-0">{{ $item->nama_izin }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Status:</p>
                            <span class="badge badge-sm {{ $item->status == 'aktif' ? 'bg-gradient-success' : 'bg-gradient-danger' }}">
                                {{ $item->status == 'aktif' ? 'Aktif' : 'Tidak Aktif' }}
                            </span>
                      </div>
                    </td>

                  </tr>
                    @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Dokumen</h6>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">

                @foreach ($dokumen as $item) 
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                      <h5 class="mb-1 text-dark text-sm">{{ $item->nama_dokumen }}</h5>
                    </div>
                  </div>
                  <div class="d-flex">
                    <a href="{{ asset('storage/' . $item->file_dokumen) }}" class="btn btn-primary" target="_blank">Lihat Dokumen</a>
                  </div>
                </li>
                @endforeach

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
