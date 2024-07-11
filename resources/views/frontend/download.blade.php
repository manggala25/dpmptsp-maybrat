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
    <section class="bg-half page-next-level" style="background-image: url('{{ asset('storage/'. $menukontak-> bg_hero) }}');"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Dokumen Dinas</h4>
                        <ul class="page-next d-inline-block mb-0">
                        </ul>
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
                        <h3 class="text-dark fw-bold mb-5">Data Dokumen Di DPMPTSP Kabupaten Maybrat</h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4 class="card-title text-primary">Data Dokumen Dinas</h4>
                        </div>
                        <div class="card-body">
                            <table id="dataPerizinan" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th>Nama Dokumen</th>
                                        <th class="text-center">File Dokumen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dokumen as $index => $item)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_dokumen }}</td>
                                            <td class="text-center">
                                                <a href="{{ asset('storage/' . $item->file_dokumen) }}" class="btn btn-primary" download>Download File PDF</a>
                                            </td>
                                        </tr>
                                    @endforeach
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
