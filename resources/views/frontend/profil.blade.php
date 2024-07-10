<!DOCTYPE html>
<html lang="en" class="no-js">

<x-head />

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
    <x-navbar :contact="$contact" :menuhome="$menuhome" />
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
                    <p>Mohon Maaf Data Tidak Ditemukan.</p>
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
                </div>

                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0">
                    <div class="job-detail border rounded p-4">
                        <h5 class="text-muted text-center pb-2"><i class="mdi mdi-map-marker me-2"></i>Informasi Kontak</h5>
                        <div class="job-detail-location pt-4 border-top">
                            @foreach ($kontak as $item)
                                @if ($item->nama_informasi !== 'Gmaps Embed')
                                    <div class="job-details-desc-item">
                                        <div class="float-start me-2">
                                            <p class="text-muted mb-2">{{ $item->nama_informasi }}</p>
                                        </div>
                                        <a class="text-muted mb-2 text-decoration-none" href="{{ $item->link }}">
                                            <p class="text-muted mb-2">: {{ $item->detail }}</p>
                                        </a>
                                    </div>
                                @endif
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

    <!-- COMPANY TESTIMONIAL START -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h3 class="text-dark fw-bold">Publikasi</h3>
                    <div id="testimonial-carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($publikasi as $key => $item)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <h6 class="text-muted f-14">{{ $item->nama_publikasi }}</h6>
                                    <p class="text-muted f-14 mb-1" style="text-align: justify; text-justify: inter-word">{{ $item->deskripsi }}</p>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div id="image-carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($publikasi as $key => $item)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <div class="blog-post-testi-img">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="" class="img-fluid mx-auto d-block rounded">
                                        <div class="blog-post-overlay">
                                            <div class="blog-post-testi-icon text-center">
                                                <i class="mdi mdi-plus-circle-outline text-white h4"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#image-carousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#image-carousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COMPANY TESTIMONIAL END -->

    
    {{-- Testimoni & Instansi --}}
    <x-testimoni-instansi :testimoni="$testimoni" :partners="$partners" />
    {{-- Testimoni & Instansi --}}

    {{-- Footer --}}
    <x-footer :$contact />
    {{-- Footer --}}

    <x-script></x-script>

</body>
</html>