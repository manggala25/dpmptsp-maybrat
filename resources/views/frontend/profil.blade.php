<!DOCTYPE html>
<html lang="en" class="no-js">

<x-head></x-head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
    <x-navbar></x-navbar>
    <!-- Navigation Bar-->
    
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background-image: url({{ asset('storage/images/maybrat-view.png') }});">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Tentang Kami</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
    <!-- ABOUT US START -->
    <section class="section">
        <div class="container">
            <div class="row">
                @php 
                    $profile_dinas = \App\Models\ProfileDinas::where('id', 1)->first();
                    $tugas_dinas = \App\Models\TugasDinas::where('status', 'aktif')->get();
                    $fungsi = \App\Models\Fungsi::where('status', 'aktif')->get();
                    $kontak = \App\Models\Contact::select('nama_informasi', 'link', 'detail', 'status')
                                ->where('status', 'aktif')
                                ->orderByRaw("CASE WHEN nama_informasi = 'Alamat Kantor' THEN 0 ELSE 1 END, nama_informasi")
                                ->get();
                @endphp

                @if ($profile_dinas)
                    <div class="col-lg-6 col-md-4">
                        <img src="{{ asset('storage/images/papua.jpg') }}" class="img-fluid rounded shadow" alt="">
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="about-desc ms-lg-4">
                            <h4 class="text-dark">Visi</h4>
                            <p class="text-muted">{{ $profile_dinas->visi }}</p>
                            <h4 class="text-dark">Misi</h4>
                            <p class="text-muted">{{ $profile_dinas->misi }}</p>
                            <h4 class="text-dark">Moto</h4>
                            <p class="text-muted">"{{ $profile_dinas->motto }}"</p>
                        </div>
                    </div>
                @else
                    <p>Data tidak ditemukan.</p>
                @endif
            </div>
        </div>
    </section>
    <!-- ABOUT US END -->


    <!-- JOB DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-dark mb-3">Tugas</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="job-detail border rounded p-4">
                        <div class="job-detail-content">
                            <div class="job-detail-desc">
                                <ol class="text-muted mb-2">
                                    @foreach ($tugas_dinas as $index => $tugas)
                                        <li class="text-muted mb-2 ">{{ $tugas->deskripsi }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="text-dark mt-4">Fungsi:</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <ol class="text-muted mb-2">
                                    @foreach ($fungsi as $index => $fungsi)
                                        <li class="text-muted mb-2 ">{{ $fungsi->deskripsi }}</li>
                                    @endforeach
                                </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Qualification :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Morbi mattis ullamcorper velit. Phasellus gravida semper nisi nullam vel sem.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-0">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Primary Responsibilities :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">HTML, CSS & Scss</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Javascript</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">PHP</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Photoshop</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-start me-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-0">Illustrator</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0">
                    <div class="job-detail border rounded p-4">
                        <h5 class="text-muted text-center pb-2"><i class="mdi mdi-map-marker me-2"></i>Informasi Kontak</h5>

                        <div class="job-detail-location pt-4 border-top">
                            @foreach ($kontak as $item )
                            <div class="job-details-desc-item">
                                <div class="float-start me-2">
                                    @if ($item->nama_informasi != 'Alamat Kantor')
                                        <p class="text-muted mb-2">{{ $item->nama_informasi }}</p>
                                    @endif
                                </div>
                                <a class="text-muted mb-2 text-decoration-none" href="{{ $item->link }}"><p class="text-muted mb-2">: {{ $item->detail }}</p></a>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="job-detail border rounded mt-4 p-4">
                        <h5 class="text-muted text-center pb-2">
                            <i class="mdi mdi-clock me-2"></i>
                            Jam Operasional
                        </h5>
                        <p class="text-muted text-center mb-0">Zonasi waktu WIT</p>

                        <div class="job-detail-time border-top pt-4">
                            <ul class="list-inline mb-0">
                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Senin</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">09.00 - 17.00</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Selasa</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">09.00 - 17.00</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Rabu</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">09.00 - 17.00</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Kamis</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">09.00 - 17.00</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Jum'at</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">09.00 - 17.00</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-start">Sabtu</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0">09.00 - 13.00</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted pb-0">
                                    <div class="float-start">Minggu</div>
                                    <div class="float-end">
                                        <h5 class="f-13 mb-0 text-danger">Libur</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB DETAILS END -->
    
    {{-- Testimoni & Instansi --}}
    <x-testimoni-instansi></x-testimoni-instansi>
    {{-- Testimoni & Instansi --}}

    <x-footer></x-footer>

    <x-script></x-script>

</body>
</html>