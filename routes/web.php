<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\ProfileDinasController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\TestimoniController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Portal Routes
    Route::resource('portal', PortalController::class)->except(['destroy']);
    Route::delete('/portal/{id}', [PortalController::class, 'destroy'])->name('portal.destroy');

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

    // Contact Routes
    Route::resource('contact', ContactController::class)->except(['destroy']);
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    // Partners Routes
    Route::resource('partners', PartnersController::class)->except(['destroy']);
    Route::delete('/partners/{id}', [PartnersController::class, 'destroy'])->name('partners.destroy');
    Route::put('/partners/{partners}', [PartnersController::class, 'update'])->name('partners.update');
    
    // Testimoni Routes
    Route::resource('testimoni', TestimoniController::class)->except(['destroy']);
    Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');
    Route::put('/testimoni/{testimoni}', [TestimoniController::class, 'update'])->name('testimoni.update');
});

require __DIR__ . '/auth.php';
