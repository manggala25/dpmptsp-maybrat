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
                            <i class="mdi mdi-card-account-mail-outline text-primary" style="font-size: 4rem"></i>
                            <h4 class="title text-center fw-bold">Hubungi Kontak Whatsapp</h4>
                            <p class="para-desc text-center mx-auto mb-1">Pemohon melakukan pendaftaran di Admin dan mengupload semua persyaratan</p>
                        </div>
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-check-network-outline text-primary" style="font-size: 4rem"></i>
                            <h4 class="title text-center fw-bold">Proses Verifikasi</h4>
                            <p class="para-desc text-center mx-auto mb-1">Pendaftaran anda akan segera di proses oleh pihak PTSP, dan proses dapat di monitoring melalui Whatsapp</p>
                        </div>
                        <div class="col-md-4 p-4 d-flex flex-column align-items-center">
                            <i class="mdi mdi-file-document-check-outline text-primary" style="font-size: 4rem"></i>
                            <h4 class="title text-center fw-bold">Download SK</h4>
                            <p class="para-desc text-center mx-auto mb-1">Apabila Proses sudah selasai maka selanjutnya adalah mendownload SK Perizinan yang sudah di tandatangi secara Digital oleh kepala dinas</p>
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
                        <nav>
                            <p class="text-muted text-center pb-3">Pilih kategori persyaratan dibawah ini:</p>
                            <div class="nav nav-pills nav-justified" id="nav-tab" role="tablist">

                                <button class="nav-link btn border active" id="nav-baru-tab" data-bs-toggle="tab" data-bs-target="#nav-baru" type="button" role="tab" aria-controls="nav-baru" aria-selected="true">
                                    Baru
                                </button>

                                <button class="nav-link btn border" id="nav-perpanjang-tab" data-bs-toggle="tab" data-bs-target="#nav-perpanjang" type="button" role="tab" aria-controls="nav-perpanjang" aria-selected="false">
                                    Perpanjang
                                </button>

                                <button class="nav-link btn border" id="nav-baliknama-tab" data-bs-toggle="tab" data-bs-target="#nav-baliknama" type="button" role="tab" aria-controls="nav-baliknama" aria-selected="false">
                                    Balik Nama/ Perubahan
                                </button>

                            </div>
                        </nav>
                        {{-- isi Tabs --}}
                        <div class="tab-content" id="nav-tabContent">
                            {{-- Tab Baru --}}
                            <div class="tab-pane pt-5 fade show active" id="nav-baru" role="tabpanel" aria-labelledby="nav-baru-tab" tabindex="0">
                                <table class="table table-striped-columns">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Persyaratan</th>
                                            <th>Keterangan</th>
                                            <th class="text-center">Template File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Surat Pernyataan</td>
                                            <td class="text-muted">Surat Pernyataan dari pemohon</td>
                                            <td class="text-center">    
                                                <a href="" class="btn-primary">Download Template</a>
                                            </td>
                                    </tbody>
                                </table>
                            </div>

                            {{-- Tab Perpanjang --}}
                            <div class="tab-pane pt-5 fade" id="nav-perpanjang" role="tabpanel" aria-labelledby="nav-perpanjang-tab" tabindex="0">
                                <table class="table table-striped-columns">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Persyaratan</th>
                                            <th>Keterangan</th>
                                            <th class="text-center">Template File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Surat Pernyataan</td>
                                            <td class="text-muted">Surat Pernyataan dari pemohon</td>
                                            <td class="text-center">    
                                                <a href="" class="btn-primary">Download Template</a>
                                            </td>
                                    </tbody>
                                </table>
                            </div>

                            {{-- Tab Balik Nama/ Perubahan --}}
                            <div class="tab-pane pt-5 fade" id="nav-baliknama" role="tabpanel" aria-labelledby="nav-baliknama-tab" tabindex="0">
                                <table class="table table-striped-columns">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Persyaratan</th>
                                            <th>Keterangan</th>
                                            <th class="text-center">Template File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Surat Pernyataan</td>
                                            <td class="text-muted">Surat Pernyataan dari pemohon</td>
                                            <td class="text-center">    
                                                <a href="" class="btn-primary">Download Template</a>
                                            </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr>
            <hr>
            {{-- FAQ's --}}
            <div class="row my-5 py-4">
                <div class="col-lg-12">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="text-dark title fw-bold">Lihat Pertanyaan Seputar Perizinan</h4>
                    </div>
                    <div class="col-12 d-flex justify-between">
                        <div class="accordion w-100" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    <h6 class="text-dark mb-0 fw-bold">
                                        Berapa lama proses pengurusan izin ?
                                    </h6>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p class="text-dark mb-0 fw-semibold py-2 ms-2">
                                        Untuk izin Izin jam operasional toko modern (IJOTM) lama prosesnya maksimal 5 Hari (setelah persyaratan lengkap)
                                    </p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    <h6 class="text-dark mb-0 fw-bold">
                                        Berapa lama masa berlaku izin ?
                                    </h6>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p class="text-dark mb-0 fw-semibold py-2 ms-2">
                                        Untuk izin Izin jam operasional toko modern (IJOTM) masa berlaku 1 tahun, sampai dengan ada perubahan status
                                    </p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- tahapan Perizinan --}}
            <div class="row my-5 py-4">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-2">
                        <h4 class="text-dark title title-line fw-bold pb-5">Silakan klik tombol dibawah untuk pendaftaran!</h4>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <a href="https://wa.me/{{ $whatsappContact->detail }}" target="_blank">
                            <button class="btn btn-primary btn-lg rounded-pill">
                                Lanjut Untuk Pendaftaran <i class="mdi mdi-arrow-right"></i>
                            </button>
                        </a>
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
