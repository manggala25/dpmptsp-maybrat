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
                        <h4 class="text-uppercase title mb-4">Perizinan</h4>
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
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="text-dark fw-bold mb-5">Daftar Perizinan Di DPMPTSP Kabupaten Maybrat</h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4 class="card-title text-primary">Data Perizinan</h4>
                        </div>
                        <div class="card-body">
                            <table id="dataPerizinan" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Jenis Izin</th>
                                        <th>Durasi (Hari)</th>
                                        <th>Bidang Izin</th>
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Izin jam operasional toko modern (IJOTM)</td>
                                        <td>5 Hari</td>
                                        <td class="text-muted">Bidang Usaha Perdagangan</td>
                                        <td class="text-center">
                                            <a href="{{ route('detail-perizinan') }}" class="btn btn-primary">Detail Persyaratan</a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Pengajuan Rekomendasi PBG</td>
                                        <td>5 Hari</td>
                                        <td class="text-muted">Sistem Informasi Manajemen Bangunan Gedung (SIMBG)</td>
                                        <td class="text-center">
                                            <a href="{{ route('detail-perizinan') }}" class="btn btn-primary">Detail Persyaratan</a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
