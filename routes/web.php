<?php

use App\Livewire\About;
use App\Livewire\Admin\Aboutme;
use App\Livewire\Kontak;
use App\Livewire\Beranda;
use App\Livewire\Booking;
use App\Livewire\Service;
use App\Livewire\Admin\Home;
use App\Livewire\Auth\Login;
use App\Livewire\Portofolio;
use App\Livewire\Admin\Gallery;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Resetpassword;
use App\Livewire\Auth\ForgotPassword;
use Illuminate\Support\Facades\Route;


// Route::get('/admin-home', Home::class)->name('admin-home');
Route::get('/', Beranda::class)->name('beranda');

Route::middleware(['web'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
    Route::get('/reset-password/{token}', Resetpassword::class)->name('password.reset');

});
Route::middleware(['auth'])->group(function () {
    Route::get('/about', About::class)->name('about');
    Route::get('/beranda', Kontak::class)->name('contact');
    Route::get('/booking', Booking::class)->name('booking');
    Route::get('/portofolio', Portofolio::class)->name('portofolio');
    Route::get('/service', Service::class)->name('service');
});

Route::middleware(['role:admin'])->group(function () {
     Route::get('/admin-gallery', Gallery::class)->name('admin.gallery');
     Route::get('/admin-aboutme', Aboutme::class)->name('admin.aboutme');
});

