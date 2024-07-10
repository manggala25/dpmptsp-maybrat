<!-- footer start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a href="javascript:void(0)"><img src="{{ asset('storage/images/logo-maybrat.png') }}" height="40" alt=""></a>
                <ul class="list-unstyled mb-0 pt-4">
                    <p class="text-white pt-2 fw-semibold">Informasi Kontak:</p>
                    @php
                        $alamatKantor = $contact->firstWhere('nama_informasi', 'Alamat Kantor');
                    @endphp
                    @if ($alamatKantor)
                        <li class="mb-2">
                            <div class="d-flex align-items-center">
                                <a href="{{ $alamatKantor->link }}" class="text-foot text-sm mb-0" style="text-decoration: none; color: inherit;">
                                    {{ $alamatKantor->detail }}
                                </a>
                            </div>
                        </li>
                    @endif
                    @foreach ($contact as $info)
                        @if ($info->nama_informasi !== 'Alamat Kantor' && $info->nama_informasi !== 'Gmaps Embed')
                            <li class="mb-2">
                                <div class="d-flex align-items-center">
                                    <p class="text-sm opacity-50 mb-0 me-2">{{ $info->nama_informasi }} :</p>
                                    <a href="{{ $info->link }}" class="text-foot text-sm mb-0" style="text-decoration: none; color: inherit;">
                                        {{ $info->detail }}
                                    </a>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <p class="text-white mb-4 footer-list-title">Menu</p>
                <ul class="list-unstyled footer-list">
                    <li><a href="{{ route('home') }}" class="text-foot"><i class="mdi mdi-chevron-right"></i> Beranda</a></li>
                    <li><a href="{{ route('profil') }}" class="text-foot"><i class="mdi mdi-chevron-right"></i> Profil</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Layanan</a></li>
                    <li><a href="{{ route('news.index') }}" class="text-foot"><i class="mdi mdi-chevron-right"></i> Artikel</a></li>
                    <li><a href="{{ route('kontak') }}" class="text-foot"><i class="mdi mdi-chevron-right"></i> Kontak</a></li>
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

<!-- Footer End -->

{{-- Click to Whatsapp --}}
@php
    $whatsappContact = $contact->firstWhere('nama_informasi', 'Whatsapp');
    $whatsappLink = $whatsappContact ? $whatsappContact->link : '#';
@endphp
<div class="floating-whatsapp">
    <a href="{{ $whatsappLink }}" target="_blank" class="whatsapp-link">
        <i class="mdi mdi-whatsapp"></i>
    </a>
</div>
