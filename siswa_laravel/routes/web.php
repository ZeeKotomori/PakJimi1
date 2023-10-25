<?php

use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/siswa', [SiswaController::class, 'index']);

// Route::get('/cv', function () {
    // return view('cv');
// });

Route::view("/cv","cv",["siswa" => Siswa::first()]);

Route::get('/company', function () {
    return view('company');
});

Route::controller(SiswaController::class)->group(function () {
    Route::get('/siswa','index')->name('siswa.index');
    Route::get('/siswa/create', 'create')->name('siswa.create');
    Route::post('/siswa/store', 'store')->name('siswa.store');
    Route::get('/siswa/delete/{siswa:id}', 'delete')->name('siswa.delete');
    Route::get('/siswa/edit/{siswa:id}', 'edit')->name('siswa.edit');
    Route::post('/siswa/update/{siswa:id}', 'update')->name('siswa.update');
});