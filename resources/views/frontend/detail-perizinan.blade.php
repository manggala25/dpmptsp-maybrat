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
    <x-navbar :$contact :menuhome="$menuhome"/>
    <!-- Navigation Bar-->

    <!-- Start home -->
    <section class="bg-half page-next-level" style="background-image: url('{{ asset('storage/images/pemerintah-maybrat.jpg') }}');"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Detail Perizinan</h4>
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
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-5">
                        <p class="title title-line pb-5 text-muted">Detail Perizinan</p>
                        <h2 class="title fw-bold mx-auto mb-1">Izin jam operasional toko modern (IJOTM)</h2>
                        <p class="text-muted para-desc mx-auto mb-1">Bidang Usaha Perdagangan</p>
                    </div>
                </div>
            </div>
            <hr>
            {{-- tahapan Perizinan --}}
            <div class="row my-5 py-4">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="text-dark title title-line fw-bold pb-5">Cara Tahapan Proses Pengajuan</h4>
                    </div>
                    <div class="col-12 d-flex justify-between">
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- Persyaratan --}}
            <div class="row my-5 py-4">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="text-dark title fw-bold">Apa Saja Persyaratannya?</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Berikut beberapa persyaratan untuk Izin Jam Operasional Toko Modern (IJOTM)</p>
                    </div>
                    <div class="col-md-12">
                        <!-- Tabs navs -->
<ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      data-mdb-tab-init
      class="nav-link active"
      id="ex3-tab-1"
      href="#ex3-tabs-1"
      role="tab"
      aria-controls="ex3-tabs-1"
      aria-selected="true"
      >Baru</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      data-mdb-tab-init
      class="nav-link"
      id="ex3-tab-2"
      href="#ex3-tabs-2"
      role="tab"
      aria-controls="ex3-tabs-2"
      aria-selected="false"
      >Pindah Nama</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      data-mdb-tab-init
      class="nav-link"
      id="ex3-tab-3"
      href="#ex3-tabs-3"
      role="tab"
      aria-controls="ex3-tabs-3"
      aria-selected="false"
      >Perpanjang</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex2-content">
  <div
    class="tab-pane fade show active"
    id="ex3-tabs-1"
    role="tabpanel"
    aria-labelledby="ex3-tab-1"
  >
    Tab 1 content
  </div>
  <div
    class="tab-pane fade"
    id="ex3-tabs-2"
    role="tabpanel"
    aria-labelledby="ex3-tab-2"
  >
    Tab 2 content
  </div>
  <div
    class="tab-pane fade"
    id="ex3-tabs-3"
    role="tabpanel"
    aria-labelledby="ex3-tab-3"
  >
    Tab 3 content
  </div>
</div>
<!-- Tabs content -->
                    </div>
                </div>
            </div>
            <hr>
            {{-- tahapan Perizinan --}}
            <div class="row my-5 py-4">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="text-dark title title-line fw-bold pb-5">Cara Tahapan Proses Pengajuan</h4>
                    </div>
                    <div class="col-12 d-flex justify-between">
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- tahapan Perizinan --}}
            <div class="row my-5 py-4">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="text-dark title title-line fw-bold pb-5">Cara Tahapan Proses Pengajuan</h4>
                    </div>
                    <div class="col-12 d-flex justify-between">
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- tahapan Perizinan --}}
            <div class="row my-5 py-4">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="text-dark title title-line fw-bold pb-5">Cara Tahapan Proses Pengajuan</h4>
                    </div>
                    <div class="col-12 d-flex justify-between">
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-circle text-primary h1"></i>
                            <h4 class="title text-center fw-bold">Tahap 1</h4>
                            <p class="para-desc text-center mx-auto mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias rerum corrupti nobis, explicabo eum repellat quam quae odio facere!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->

    {{-- Footer --}}
    <x-footer :$contact />
    {{-- Footer --}}

    <x-script></x-script>

</body>
    

</html>
