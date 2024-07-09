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

    <x-navbar :$contact />

    <!-- Start home -->
    @if($news)
    <section class="bg-half page-next-level" style="background-image: url('{{ asset('storage/' . $news->gambar_berita) }}');"> 
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
                            <img src="{{ asset('storage/' . $news->gambar_berita) }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="blog-details meta mt-3">
                            <ul class="list-inline mb-1">
                                <li class="list-inline-item me-4">
                                    <p class="text-muted mb-0"><i class="mdi mdi-calendar-range me-1"></i>{{ \Carbon\Carbon::parse($news->tanggal_publikasi)->format('d F Y') }}</p>
                                </li>

                                <li class="list-inline-item me-4">
                                    <p class="text-muted mb-0"><i class="mdi mdi-message-reply-text me-1"></i>4 Comment</p>
                                </li>

                                <li class="list-inline-item">
                                    <p class="text-muted mb-0"><i class="mdi mdi-layers me-1"></i>{{ $news->kategori }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-details-desc p-2">
                            <h4 class="mb-3"><a href="#" class="text-dark fw-bold">{{ $news->judul }}</a></h4>

                            <p class="text-muted mb-3 f-13" style="text-align: justify; text-justify: inter-word;">{!! nl2br(e($news->isi)) !!}</p>

                            {{-- Like button --}}
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mt-1">
                                    <a href="" class="text-dark">
                                        <p class="mb-0 f-17"><i class="mdi mdi-heart-outline me-1 text-danger"></i>Like</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- Comments section --}}
                        <div class="rounded border mt-4 p-4">
                            <h5 class="text-dark"><i class="mdi mdi-comment-multiple me-2"></i>4 Comments</h5>

                            {{-- Example comments (you can replace this with dynamic comments from database) --}}
                            <div class="media mt-4 pt-2">
                                <div class="blog-comment-img">
                                    <img class="d-block mx-auto rounded-pill" height="60" alt="" src="{{ asset('images/testi/img-6.jpg') }}">
                                </div>
                                <div class="media-body ms-3">
                                    <h6 class="mb-0"><a href="#" class="text-dark">David Smith</a></h6>
                                    <p class="text-muted mb-0">08-Sep-2018 at 02:15 pm</p>
                                    <p class="text-muted f-14 mb-2">The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli.</p>
                                    <p class="mb-0"><a href="" class="text-muted"><i class="mdi mdi-reply-all me-2"></i>Reply</a></p>
                                </div>
                            </div>
                            

                            {{-- Leave a comment form --}}
                            <div class="media mt-4">
                                <div class="blog-comment-img">
                                    <img class="d-block mx-auto rounded-pill" height="60" alt="" src="{{ asset('images/testi/img-7.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="rounded border mt-4 p-4">
                        <h5 class="text-dark"><i class="mdi mdi-pencil me-2"></i>Leave Your Comments</h5>
                        <div class="custom-form mt-4 pt-2">
                            <form name="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-account text-muted f-17"></i>
                                            <input name="name" id="name" type="text" class="form-control blog-details" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-email text-muted f-17"></i>
                                            <input name="email" id="email" type="email" class="form-control blog-details" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group blog-details-form">
                                        <i class="mdi mdi-web text-muted f-17"></i>
                                        <input name="url" id="url" type="url" class="form-control blog-details" placeholder="url">
                                    </div>
                                </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-comment-processing text-muted f-17"></i>
                                            <textarea name="comments" id="comments" rows="4" class="form-control blog-details" placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Post comment">
                                    </div>
                                </div>
                            </form>
                            <!-- /form -->
                        </div>
                    </div>
                        @else
                        <p>Artikel Tidak Ditemukan.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG LIST END -->


    {{-- Footer --}}
    <x-footer :$contact />
    {{-- Footer --}}

    <x-script></x-script>

</body>
</html>
