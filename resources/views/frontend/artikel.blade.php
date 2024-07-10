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
    <x-navbar :$contact :menuhome="$menuhome" />
    <!-- Navigation Bar-->

    <!-- Start home -->
    <section class="bg-half page-next-level" style="background-image: url('{{ asset('storage/'. $menuartikel-> bg_hero) }}');"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">{{ $menuartikel->title_hero }}</h4>
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
                                <h4><a href="{{ route('detail.artikel', ['slug' => $item->slug]) }}" class="title text-dark">{{ $item->judul }}</a></h4>
                                <p class="text-muted">{{ Str::limit($item->isi, 50, '...') }}</p>
                                <a href="{{ route('detail.artikel', ['slug' => $item->slug]) }}" class="text-dark readmore">Baca Selengkapnya<i class="mdi mdi-chevron-right"></i></a>
                            </div>
                            <div class="author">
                                <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">{{ $item->penulis }}</a></p>
                                <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> {{ \Carbon\Carbon::parse($item->tanggal_publikasi)->locale('id_ID')->translatedFormat('l, d F Y') }}</p>
                            </div>
                        </div>
                    </div><!--end col-->
                @endforeach

                <div class="col-lg-12">
                    <nav aria-label="Page navigation example">
                        {{ $news->links() }} <!-- Pagination links -->
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->

    {{-- Footer --}}
    <x-footer :$contact :menuhome="$menuhome"/>
    {{-- Footer --}}

    <x-script></x-script>

</body>
</html>
