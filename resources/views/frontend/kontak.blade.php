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
    <x-navbar :$contact :menuhome="$menuhome"/>
    <!-- Navigation Bar-->
    
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background-image: url({{ asset('storage/images/maybrat-view.png') }});"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Informasi Kontak</h4>
                        <ul class="page-next d-inline-block mb-0">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- MAP START -->
    <section class="section pt-10 bg-light">        
        <div class="container mt-50 mt-60">
            <div class="row align-items-start g-5 justify-between">
                @foreach ($contact as $item)
                    @if ($item->nama_informasi !== 'Gmaps Embed')
                        @if ($item->nama_informasi === 'Alamat Kantor')
                            <div class="col-lg-5">
                        @else
                            <div class="col-lg-4">
                        @endif
                                <div class="contact-item mt-40">
                                    <div class="float-start">
                                        <div class="contact-icon d-inline-block border rounded-pill shadow text-dark me-3">
                                            <img class="img-fluid" src="{{ asset('storage/' . $item->icon) }}" alt="icon">
                                        </div>
                                    </div>
                                    <div class="contact-details">
                                        <h5 class="text-dark mb-1">{{ $item->nama_informasi }}</h5>
                                        <a href="{{ $item->link }}" class="text-muted mb-2 text-decoration-none" target="_blank">
                                            <p class="mb-0 text-muted">{{ $item->detail }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    @endif
                @endforeach

                <!-- Embed Google Maps -->

                @if ($gmaps_embed && $gmaps_embed->link)
                    <div class="col-lg-12 mt-5">
                        <iframe src="{{ $gmaps_embed->link }}" width="100%" height="400" style="border:2px solid #ccc; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                @else
                    <div class="col-lg-12 mt-5">
                        <p class="mt-5">Alamat kantor tidak ditemukan atau link tidak tersedia.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- CONTACT END -->

    {{-- Footer --}}
    <x-footer :$contact />
    {{-- Footer --}}
    
    <x-script></x-script>

</body>
</html>
