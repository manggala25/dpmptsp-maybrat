<!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="{{ asset('storage/images/logo-maybrat.png') }}" height="40" alt=""></a>
                    <ul class="list-unstyled mb-0 pt-4">
                        <p class="text-white pt-2 fw-semibold">Informasi Kontak:</p>
                        @php
                            $contact = \App\Models\Contact::select('nama_informasi', 'link', 'detail', 'status')
                                ->where('status', 'aktif')
                                ->orderByRaw("CASE WHEN nama_informasi = 'Alamat Kantor' THEN 0 ELSE 1 END, nama_informasi")
                                ->get();
                        @endphp
                        @foreach ($contact as $item) 
                            <li class="mb-2">
                                <div class="d-flex align-items-center">
                                    @if ($item->nama_informasi != 'Alamat Kantor')
                                        <p class="text-sm opacity-50 mb-0 me-2">{{ $item->nama_informasi }} :</p>
                                    @endif
                                    <a href="{{ $item->link }}" class="text-foot text-sm mb-0" style="text-decoration: none; color: inherit;">
                                        {{ $item->detail }}
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Menu</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="index.html" class="text-foot"><i class="mdi mdi-chevron-right"></i> Beranda</a></li>
                        <li><a href="about.html" class="text-foot"><i class="mdi mdi-chevron-right"></i> Profil</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Layanan</a></li>
                        <li><a href="blog-grid.html" class="text-foot"><i class="mdi mdi-chevron-right"></i> Artikel</a></li>
                        <li><a href="contact.html" class="text-foot"><i class="mdi mdi-chevron-right"></i> Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Jadwal Layanan</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Senin - Jum'at : 9:00 - 17:00</li>
                        <li class="mt-2">Sabtu : 10:00 - 15:00</li>
                        <li class="mt-2">Minggu : Libur </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0 text-muted text-sm">©2024 IM Creative Studio. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    {{-- Click to Whatsapp --}}
    <div class="floating-whatsapp">
        <a href="https://wa.me/your-whatsapp-number" target="_blank" class="whatsapp-link">
            <i class="mdi mdi-whatsapp"></i>
        </a>
    </div>