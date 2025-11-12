<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\BookingController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('tours', TourController::class)->only(['index','show']);
Route::resource('attractions', AttractionController::class)->only(['index','show']);
Route::resource('plants', PlantController::class)->only(['index','show']);

Route::get('book/{tour}', [BookingController::class, 'create'])->name('bookings.create');
Route::post('book/{tour}', [BookingController::class, 'store'])->name('bookings.store');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
