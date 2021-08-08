<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnaGiris;
use App\Http\Controllers\BizKimiz;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\Cocugumuz;
use App\Http\Controllers\Cocuklarimiz;

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

Route::get('/', [AnaGiris::class, 'Sayfa']);
Route::get('/biz-kimiz', [BizKimiz::class, 'Sayfa']);
Route::get('/iletisim', [Iletisim::class, 'Sayfa']);
Route::get('/cocugumuz', [Cocugumuz::class, 'Sayfa']);
Route::get('/cocuklarimiz', [Cocuklarimiz::class, 'Sayfa']);

Route::get('/yonetim', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
