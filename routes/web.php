<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PangkatController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\PengikutController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PerjalananController;

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

Route::get('/', function () {
    return view('home-page');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('surat', SuratController::class);
Route::get('/surat/{id}', [SuratController::class, 'show'])->name('surat.show');
Route::get('/surat//{id}', [SuratController::class, 'cetakSurat'])->name('surat.cetak');



Route::middleware(['auth'])->group(function () {
    // Data Dasar
    Route::get('/datapegawai',[PegawaiController::class, 'data'])->name('pegawai-data');
    Route::get('/dataperjalanan',[PerjalananController::class, 'data'])->name('perjalanan-data');
    Route::get('/datasurat',[SuratController::class, 'data'])->name('surat-data');

    Route::get('/surat/cetak/{surat}',[SuratController::class,'cetakSurat'])->name('surat.cetak');
    // Route::get('/surat/pdf/{surat}',[SuratController::class,'pdfSurat'])->name('surat.pdf');

    Route::resource('/pegawai', PegawaiController::class)->except('show');
    Route::resource('/perjalanan', PerjalananController::class)->except('show');
    Route::resource('/surat',SuratController::class);

    // Data Tambahan
    Route::get('/datajabatan',[JabatanController::class, 'data'])->name('jabatan-data');
    Route::get('/datakendaraan',[KendaraanController::class, 'data'])->name('kendaraan-data');
    Route::get('/datapangkat',[PangkatController::class, 'data'])->name('pangkat-data');
    Route::get('/datainstansi',[InstansiController::class, 'data'])->name('instansi-data');

    Route::resource('/jabatan',JabatanController::class)->except('show');
    Route::resource('/kendaraan',KendaraanController::class)->except('show');
    Route::resource('/pangkat',PangkatController::class)->except('show');
    Route::resource('/instansi',InstansiController::class);

    // Instansi Routes
    Route::get('/instansi', [InstansiController::class, 'index']);
    Route::get('/instansi/create', [InstansiController::class, 'create']);
    Route::post('/instansi', [InstansiController::class, 'store']);
    Route::get('/instansi/{instansi}', [InstansiController::class, 'show']);
    Route::get('/instansi/{instansi}/edit', [InstansiController::class, 'edit']);
    Route::put('/instansi/{instansi}', [InstansiController::class, 'update']);
    Route::delete('/instansi/{instansi}', [InstansiController::class, 'destroy']);

});
