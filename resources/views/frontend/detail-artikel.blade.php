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

    <x-navbar :$contact :menuhome="$menuhome"/>

    <!-- Start home -->
    @if($article)
    <section class="bg-half page-next-level" style="background-image: url('{{ asset('storage/' . $article->gambar_berita) }}');"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Detail Artikel</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- BLOG LIST START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-8 col-md-6 col-12 order-1 order-md-2">
                    <div class="shadow rounded p-4">
                        <div class="blog-details-img">
                            <img src="{{ asset('storage/' . $article->gambar_berita) }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="blog-details meta mt-3">
                            <ul class="list-inline mb-1">
                                <li class="list-inline-item me-4">
                                    <p class="text-muted mb-0"><i class="mdi mdi-calendar-range me-1"></i>{{ \Carbon\Carbon::parse($article->tanggal_publikasi)->format('d F Y') }}</p>
                                </li>

                                <li class="list-inline-item me-4">
                                    <p class="text-muted mb-0"><i class="mdi mdi-pencil me-1"></i>{{ $article->penulis }}</p>
                                </li>

                                <li class="list-inline-item">
                                    <p class="text-muted mb-0"><i class="mdi mdi-layers me-1"></i>{{ $article->kategori }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-details-desc p-2">
                            <h4 class="mb-3"><a href="#" class="text-dark fw-bold">{{ $article->judul }}</a></h4>

                            <p class="text-muted mb-3 f-13" style="text-align: justify; text-justify: inter-word;">{!! nl2br(e($article->isi)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG LIST END -->
    @else
    <p>Artikel Tidak Ditemukan.</p>
    @endif

    {{-- Footer --}}
    <x-footer :$contact :menuhome="$menuhome"/>
    {{-- Footer --}}

    <x-script></x-script>

</body>
</html>
