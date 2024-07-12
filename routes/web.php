<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\ProfileDinasController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TugasDinasController;
use App\Http\Controllers\FungsiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfilpageController;
use App\Http\Controllers\ArtikelpageController;
use App\Http\Controllers\DetailartikelpageController;
use App\Http\Controllers\KontakpageController;
use App\Http\Controllers\DownloadpageController;
use App\Http\Controllers\PerizinanpageController;
use App\Http\Controllers\DetailperizinanpageController;
use App\Http\Controllers\JamLayananController;
use App\Http\Controllers\MenuHomeController;
use App\Http\Controllers\MenuProfilController;
use App\Http\Controllers\MenuArtikelController;
use App\Http\Controllers\MenuKontakController;
use App\Http\Controllers\PerizinansController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\KategoriPersyaratanController;
use App\Http\Controllers\TahapanPengajuanController;

//route frontend
//home
Route::get('/', [HomepageController::class, 'index'])->name('home');

//profil
Route::get('/profil', [ProfilpageController::class, 'index'])->name('profil');

//perizinan dan detailnya
Route::get('/perizinan', [PerizinanpageController::class, 'index'])->name('perizinan');
Route::get('/perizinan/{slug}', [DetailperizinanpageController::class, 'show'])->name('detail-perizinan');
Route::get('/detail-perizinan/{slug}', [DetailperizinanpageController::class, 'show'])->name('detail-perizinan');

// Rute artikel
Route::get('/artikel', [ArtikelpageController::class, 'index'])->name('artikel');
Route::get('/detail-artikel/{slug}', [ArtikelpageController::class, 'show'])->name('detail-artikel');
Route::get('/artikel/{slug}', [DetailartikelpageController::class, 'show'])->name('detail.artikel');

//contact
Route::get('/kontak', [KontakpageController::class, 'index'])->name('kontak');

//download
Route::get('/download', [DownloadpageController::class, 'index'])->name('download');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard Routes
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

    // Portal Routes
    Route::resource('portal', PortalController::class)->except(['destroy']);
    Route::delete('/portal/{id}', [PortalController::class, 'destroy'])->name('portal.destroy');

    ///////////////// Data Perizinan Routes/////////////////
    // Data Perizinan Routes
    Route::resource('perizinans', PerizinansController::class)->except(['destroy']);
    Route::delete('/perizinans/{id}', [PerizinansController::class, 'destroy'])->name('perizinans.destroy');
    Route::put('perizinans/{id}', [PerizinansController::class, 'update'])->name('perizinans.update');

    // Data Persyaratan Routes
    Route::resource('persyaratan', PersyaratanController::class)->except(['destroy']);
    Route::delete('/persyaratan/{id}', [PersyaratanController::class, 'destroy'])->name('persyaratan.destroy');
    Route::put('persyaratan/{id}', [PersyaratanController::class, 'update'])->name('persyaratan.update');
    
    // Data Kategori Perizinan Routes
    Route::resource('kategoripersyaratan', KategoriPersyaratanController::class)->except(['destroy']);
    Route::delete('/kategoripersyaratan/{id}', [KategoriPersyaratanController::class, 'destroy'])->name('kategoripersyaratan.destroy');
    Route::put('kategoripersyaratan/{id}', [KategoriPersyaratanController::class, 'update'])->name('kategoripersyaratan.update');

    // Data Dokumen Routes
    Route::resource('dokumen', DokumenController::class)->except(['destroy']);
    Route::delete('/dokumen/{id}', [DokumenController::class, 'destroy'])->name('dokumen.destroy');
    Route::put('dokumen/{id}', [DokumenController::class, 'update'])->name('dokumen.update');

    // Section Homepage Routes
    Route::resource('menuhome', MenuHomeController::class)->except(['destroy']);
    Route::delete('/menuhome/{id}', [MenuHomeController::class, 'destroy'])->name('menuhome.destroy');
    
    // Section Profil Pages Routes
    Route::resource('menuprofil', MenuProfilController::class)->except(['destroy']);
    Route::delete('/menuprofil/{id}', [MenuProfilController::class, 'destroy'])->name('menuprofil.destroy');

    // Section Artikel Pages Routes
    Route::resource('menuartikel', MenuArtikelController::class)->except(['destroy']);
    Route::delete('/menuartikel/{id}', [MenuArtikelController::class, 'destroy'])->name('menuartikel.destroy');

    // Section Kontak Pages Routes
    Route::resource('menukontak', MenuKontakController::class)->except(['destroy']);
    Route::delete('/menukontak/{id}', [MenuKontakController::class, 'destroy'])->name('menukontak.destroy');

    // Berita Routes
    Route::resource('news', NewsController::class)->except(['destroy']);
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    Route::put('/berita/{berita}', [NewsController::class, 'update'])->name('berita.update');

    // Profile Dinas Routes
    Route::resource('profile_dinas', ProfileDinasController::class)->except(['destroy']);
    Route::delete('/profile_dinas/{id}', [ProfileDinasController::class, 'destroy'])->name('profile_dinas.destroy');
    Route::put('/profile_dinas/{profile_dinas}', [ProfileDinasController::class, 'update'])->name('profile_dinas.update');

    // Program Kerja Routes
    Route::resource('program_kerja', ProgramKerjaController::class)->except(['destroy']);
    Route::delete('/program_kerja/{id}', [ProgramKerjaController::class, 'destroy'])->name('program_kerja.destroy');

    // Fungsi Kerja Routes
    Route::resource('fungsi', FungsiController::class)->except(['destroy']);
    Route::delete('/fungsi/{id}', [FungsiController::class, 'destroy'])->name('fungsi.destroy');

    // Jam Layanan Routes
    Route::resource('jam_layanan', JamLayananController::class)->except(['destroy']);
    Route::delete('/jam_layanan/{id}', [JamLayananController::class, 'destroy'])->name('jam_layanan.destroy');

    // Tugas Routes
    Route::resource('tugas_dinas', TugasDinasController::class)->except(['destroy']);
    Route::delete('/tugas_dinas/{id}', [TugasDinasController::class, 'destroy'])->name('tugas_dinas.destroy');

    // Contact Routes
    Route::resource('contact', ContactController::class)->except(['destroy']);
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    // Tahapan Proses Pengajuan Routes
    Route::resource('tahapanpengajuan', TahapanPengajuanController::class)->except(['destroy']);
    Route::delete('/tahapanpengajuan/{id}', [TahapanPengajuanController::class, 'destroy'])->name('tahapanpengajuan.destroy');

    // Partners Routes
    Route::resource('partners', PartnersController::class)->except(['destroy']);
    Route::delete('/partners/{id}', [PartnersController::class, 'destroy'])->name('partners.destroy');
    Route::put('/partners/{partners}', [PartnersController::class, 'update'])->name('partners.update');

    // Testimoni Routes
    Route::resource('testimoni', TestimoniController::class)->except(['destroy']);
    Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');
    Route::put('/testimoni/{testimoni}', [TestimoniController::class, 'update'])->name('testimoni.update');

    // Layanan Routes
    Route::resource('layanan', LayananController::class)->except(['destroy']);
    Route::delete('/layanan/{id}', [LayananController::class, 'destroy'])->name('layanan.destroy');
    Route::put('/layanan/{layanan}', [LayananController::class, 'update'])->name('layanan.update');

    // Publikasi Routes
    Route::resource('publikasi', PublikasiController::class)->except(['destroy']);
    Route::delete('/publikasi/{id}', [PublikasiController::class, 'destroy'])->name('publikasi.destroy');
    Route::put('/publikasi/{publikasi}', [PublikasiController::class, 'update'])->name('publikasi.update');
});

require __DIR__ . '/auth.php';
