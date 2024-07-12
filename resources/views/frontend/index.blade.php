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
    <x-navbar :contact="$contact" :menuhome="$menuhome" />
    <!-- Navigation Bar-->

    <!-- Start Home -->
    <section class="bg-home" style="background: url('{{ asset('storage/'. $menuhome-> bg_hero) }}') center;">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                                <h6 class="small-title text-uppercase text-light mb-3">
                                    {{ $menuhome-> paragraf_hero }}
                                </h6>
                                <h1 class="heading fw-bold mb-4">
                                    {{ $menuhome-> title_hero }}
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="home-form-position">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-registration-form p-4 mb-3">
                                    <form class="registration-form">
                                        <div class="row">
                                            <div class="col-lg-10 col-md-12">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-briefcase"></i>
                                                    <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Apa yang anda cari?">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-4">
                                                <div class="registration-form-box">
                                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Cari">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                <div class="col-lg-6 col-md-5">
                    <img src="{{ asset('storage/'. $menuhome->img_profil) }}" class="img-fluid rounded shadow" alt="">
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="about-desc ms-lg-4">
                        <h3 class="text-dark fw-bold">{{ $menuhome->title_profil }}</h3>
                        <p class="text-muted text-justify">
                            {{ $short_description }}
                            @if (strlen($profile_dinas->deskripsi) > 600)
                                <span id="dots">...</span>
                                <span id="more" style="display: none;">{{ substr($profile_dinas->deskripsi, 600) }}</span>
                            @endif
                        </p>
                        <a href="{{ route('profil') }}" id="readMoreBtn" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT US END -->

    
    <!-- JOB DETAILS START -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- Tugas --}}
                    <div class="col-lg-5">
                        <h4 class="text-dark mt-4 fw-bold">{{ $menuhome->title_tugas }}</h4>
                    </div>
                    <div class="col-12">
                        <div class="job-detail border rounded mt-2 p-4">
                            <div class="job-detail-desc">
                                <ol class="text-muted mb-2">
                                    @foreach ($tugas_dinas as $item => $tugas)
                                        <li class="text-muted mb-2 ">{{ $tugas->deskripsi }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                    {{-- endTugas --}}
                </div>
                <div class="col-12">
                    {{-- Fungsi --}}
                    <div class="col-lg-5">
                        <h4 class="text-dark mt-4 fw-bold">{{ $menuhome->title_fungsi }}</h4>
                    </div>
                    <div class="col-12">
                        <div class="job-detail border rounded mt-2 p-4">
                            <div class="job-detail-desc">
                                <ol class="text-muted mb-2">
                                    @foreach ($fungsi as $item => $fungsi)
                                        <li class="text-muted mb-2 ">{{ $fungsi->deskripsi }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                    {{-- endFungsi --}}
                </div>
            </div>
        </div>
    </section>
    <!-- JOB DETAILS END -->

    <!-- SERVICE START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="section-title text-center pb-5">
                    <h4 class="title title-line pb-5 fw-bold">{{ $menuhome->title_layanan }}</h4>
                    <p class="text-muted para-desc mx-auto mb-1">
                        {{ $menuhome->paragraf_layanan }}
                    </p>
                </div>
                @foreach ($layanan as $item) 
                <div class="col-lg-4 col-md-6 mb-4 pt-5">
                    <div class="services-box">
                        <div class="service-icon mb-3">
                            {!! $item->icon !!}
                        </div>
                        <div class="services-desc">
                            <h5 class="mb-2"><a href="#" class="text-dark">{{ $item->nama_layanan }}</a></h5>
                            <p class="text-muted mb-0">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- SERVICE END -->

    <!-- all jobs start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5 fw-bold">{{ $menuhome->title_portal }}</h4>
                        <p class="text-muted para-desc mx-auto mb-1">
                            {{ $menuhome->paragraf_portal }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content mt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="portal" role="tabpanel" aria-labelledby="tab">
                            <div class="row">
                                @foreach ($portal as $item)
                                <div class="col-md-6">
                                    <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                        <div class="lable text-center pt-2 pb-2">
                                            <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="p-4">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <div class="mo-mb-2">
                                                        <img src="{{ asset('storage/' . $item->gambar_portal) }}" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div>
                                                        <h4 class="f-18"><a href="{{ $item->link_portal }}" class="text-dark">{{ $item->nama_portal }}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-light">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <a href="{{ $item->link_portal }}" class="text-primary">Kunjungi ini<i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end containar -->
    </section>
    <!-- all jobs end -->

    <!-- blog start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5 fw-bold">{{ $menuhome->title_berita }}</h4>
                        <p class="text-muted para-desc mx-auto mb-1">
                            {{ $menuhome->paragraf_berita }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $news = \App\Models\News::where('status', 'published')
                                    ->orderBy('tanggal_publikasi', 'desc')
                                    ->take(3)
                                    ->get();
                @endphp
                @foreach ($news as $item)
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="blog position-relative overflow-hidden shadow rounded">
                        <div class="position-relative overflow-hidden">
                            <div class="image-container" style="width: 100%; aspect-ratio: 4/3; overflow: hidden;">
                                <img src="{{ asset('storage/' . $item->gambar_berita) }}" class="img-fluid rounded-top" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="overlay rounded-top bg-dark"></div>
                            <div class="likes">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content p-4">
                            <h4><a href="javascript:void(0)" class="title text-dark">{{ $item->judul }}</a></h4>
                            <p class="text-muted">{{ Str::limit($item->isi, 50, '...') }}</p>
                            <a href="#" class="text-dark readmore">Baca Selengkapnya<i class="mdi mdi-chevron-right"></i></a>
                        </div>
                        <div class="author">
                            <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">{{ $item->penulis }}</a></p>
                            <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> {{ \Carbon\Carbon::parse($item->tanggal_publikasi)->locale('id_ID')->translatedFormat('l, d F Y') }}</p>
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach


            </div>
        </div>
    </section>
    <!-- blog end -->

    {{-- Testimoni & Instansi --}}
    <x-testimoni-instansi :testimoni="$testimoni" :partners="$partners" :menuhome="$menuhome" />
    {{-- Testimoni & Instansi --}}

    {{-- Footer --}}
    <x-footer :$contact :menuhome="$menuhome" :jamlayanan="$jamlayanan"/>
    {{-- Footer --}}

    <x-script></x-script>

</body>
</html>