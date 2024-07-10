<!-- testimonial start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5 fw-bold">{{ $menuhome->title_ucapan }}</h4>
                        <p class="text-muted para-desc mx-auto mb-1">
                            {{ $menuhome->paragraf_ucapan }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-12">
                    <div id="owl-testi" class="owl-carousel owl-theme">
                        @foreach($testimoni as $item)
                        <div class="item testi-box rounded p-4 me-3 ms-2 mb-4 bg-light position-relative">
                            <p class="text-muted mb-5">{!! $item->ucapan !!}</p>
                            <div class="clearfix">
                                <div class="testi-img float-start me-3">
                                    <img src="{{ asset('storage/' . $item->foto) }}" height="60" width="60" object-fit="cover" alt="" class="rounded-circle shadow">
                                </div>
                                <h5 class="f-18 pt-1">{{ $item->nama }}</h5>
                                <p class="text-muted mb-0">{{ $item->jabatan }}</p>
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- Instansi Terkait --}}
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line fw-bold pb-5">{{ $menuhome->title_instansi }}</h4>
                        <p class="text-muted para-desc mx-auto mb-1">
                            {{ $menuhome->paragraf_instansi }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center">
                @foreach ($partners as $item)
                    <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2 text-center">
                        <a href="{{ $item->link }}" class="d-block">
                            <img src="{{ asset('storage/' . $item->logo) }}" class="img-fluid" style="max-width: 100%; height: auto; object-fit: contain;" alt="{{ $item->nama_partner }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- end Instansi Terkait --}}
    </section>
    <!-- testimonial end -->