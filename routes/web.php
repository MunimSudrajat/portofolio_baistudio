<?php

use App\Livewire\About;
use App\Livewire\Kontak;
use App\Livewire\Beranda;
use App\Livewire\Booking;
use App\Livewire\Service;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Portofolio;
use Illuminate\Support\Facades\Route;

Route::get('/', Beranda::class)->name('beranda');
Route::get('/about', About::class)->name('about');
Route::get('/beranda', Kontak::class)->name('contact');
Route::get('/booking', Booking::class)->name('booking');
Route::get('/portofolio', Portofolio::class)->name('portofolio');
Route::get('/service', Service::class)->name('service');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
