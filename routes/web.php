<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NowPlayingController;
use App\Http\Controllers\PopularController;
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
// now playing
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('home/now_playing', 'index');
    Route::get('home/popular', 'popular');
    Route::get('home/top_rated', 'top_rated');
    Route::get('home/up_coming', 'upcoming');
    Route::get('home/{id}', 'show');
});

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'active'            => 'dash',
        'title_halaman'     => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'login']);
Route::get('register', [LoginController::class, 'regis'])->name('register')->middleware('guest');
Route::post('register', [LoginController::class, 'register']);

Route::post('/logout', [LoginController::class, 'logout']);

// now playing
Route::controller(NowPlayingController::class)->middleware('auth')->group(function () {
    Route::get('now_playing', 'index');
});

// popular
Route::controller(PopularController::class)->middleware('auth')->group(function () {
    Route::get('popular', 'index');
});

// top rated
Route::controller(PopularController::class)->middleware('auth')->group(function () {
    Route::get('top_rated', 'index');
});

// upcoming
Route::controller(PopularController::class)->middleware('auth')->group(function () {
    Route::get('up_coming', 'index');
});
