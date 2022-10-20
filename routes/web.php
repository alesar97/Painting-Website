<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/get-quote', [App\Http\Controllers\QuoteController::class, 'index'])->name('quote');
Route::post('/get-quote', [App\Http\Controllers\QuoteController::class, 'store'])->name('quote.store');
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services');
Route::get('/services/details/{id}', [App\Http\Controllers\ServiceController::class, 'details'])->name('service.details');
Route::get('/gallery/before&after', [App\Http\Controllers\GalleryController::class, 'images'])->name('images');
Route::get('/gallery/videos', [App\Http\Controllers\GalleryController::class, 'videos'])->name('videos');
Route::get('/gallery/previous_works', [App\Http\Controllers\GalleryController::class, 'previousWorks'])->name('previousWorks');
Route::get('about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('google-reviews', [App\Http\Controllers\GoogeController::class, 'index'])->name('google-reviews.index');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
