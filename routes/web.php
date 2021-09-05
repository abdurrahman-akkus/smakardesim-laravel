<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnaGiris;
use App\Http\Controllers\BizKimiz;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\Cocugumuz;
use App\Http\Controllers\Cocuklarimiz;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\CocukKayit;
use App\Http\Controllers\CocukOnay;
use App\Utils\Cryptologist;
use App\Utils\ValilikIzni;
use App\Services\CocukService;

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
Route::get('/cocugumuz/{id}', [Cocugumuz::class, 'Sayfa']);
Route::get('/cocuklarimiz/{param?}', [Cocuklarimiz::class, 'Sayfa']);

//id bilgisi gelmezse cocuklarimiz'a yönlendir
Route::redirect('/cocugumuz', '/cocuklarimiz');


/*Route::get('/yonetim', function () {
    return view('welcome');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [Dashboard::class, 'Sayfa'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/cocuk-kayit', [CocukKayit::class, 'Sayfa']);
Route::middleware(['auth:sanctum', 'verified'])->get('/cocuk-onay', [CocukOnay::class, 'Sayfa']);

// TODO production.env silinecek
Route::get('encrypt', [Cryptologist::class, 'encrypt']);
Route::get('decrypt', [Cryptologist::class, 'decrypt']);

Route::post('/valilik-izin',[ValilikIzni::class, 'izinKontrol']);
Route::post('/mail-gonder', [Iletisim::class, 'mailGonder']);

Route::post('/banka-kaydet',[BankaService::class, 'bankaKaydet']);
Route::put('/banka-kaydet',[BankaService::class, 'bankaGuncelle']);


// API
Route::get('/kardes-ol/{id}', [CocukService::class, 'kardesOl']);
Route::post('/cocuk-kaydet',[CocukService::class, 'cocukKaydet']);
Route::put('/cocuk-kaydet',[CocukService::class, 'cocukGuncelle']);
Route::get('/cocuk/{id}',[CocukService::class, 'tekCocukAl']);
