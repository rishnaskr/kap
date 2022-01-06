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
Route::get('/', 'HomeController@index');
// Route::auth();
// Auth::routes();

// Route::group( ['prefix' => 'admin','as' => 'admin.','middleware' => ['auth']], function() {
Route::group( ['as' => 'kap.','middleware' => ['auth']], function() {

    Route::get('/', 'HomeController@index')->name('index');

    Route::get('/monitoring','kap\MonitoringController@show')->name('monitoring');
    Route::get('/equipment','kap\EquipmentController@show')->name('equipment');

    Route::get('/kegiatan-rt','KegiatanController@show')->name('kegiatan-rt');
    Route::get('/kegiatan-laporanrt','KegiatanLaporanController@show')->name('kegiatan-laporanrt');

    //referensi
    Route::get('/ref-penduduk','referensi\pendudukController@show')->name('refpenduduk');
    Route::get('/ref-suratpelayanan','referensi\suratpelayananController@show')->name('refsuratpelayanan');
    Route::get('/ref-kelengkapansuratpelayanan','referensi\kelengkapansuratpelayananController@show')->name('refkelengkapansuratpelayanan');

    //master user
    Route::get('/master-user','masteruser\LoginUserController@show')->name('masteruser');

    //api
    // Route::apiResource('/api/equipment','kap\EquipmentController');
    // Route::apiResource('/api/monitoring','kap\MonitoringController');
    
});

require __DIR__.'/auth.php';
