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

    <!-- Start Home -->
    <section class="bg-home" style="background: url('{{ asset('storage/images/image-artikel-bg.jpg') }}') center;">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                                <h6 class="small-title text-uppercase text-light mb-3">DPMPTSP KABUPATEN MAYBRAT</h6>
                                <h1 class="heading fw-bold mb-4">PORTAL LAYANAN KABUPATEN MAYBRAT</h1>
                            </div>
                        </div>
                    </div>
                    <div class="home-form-position">
                        <div class="row">
                            <div class="col-lg-12">
                                {{-- <div class="home-registration-form p-4 mb-3">
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
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- Start home -->
    <section class="bg-half page-next-level" style="background-image: url(images/image-artikel-bg.jpg);"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Artikel</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- blog start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="row">

                @php
                    $news = \App\Models\News::where('status', 'published')
                                    ->orderBy('tanggal_publikasi', 'desc')
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
                            <p class="text-muted">{{ $item->slug }}</p>
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

                <div class="col-lg-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination job-pagination justify-content-center mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="mdi mdi-chevron-double-left f-15"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="mdi mdi-chevron-double-right f-15"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>  
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->

    <x-footer></x-footer>

    <x-script></x-script>

</body>
</html>