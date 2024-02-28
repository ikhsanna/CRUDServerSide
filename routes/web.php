<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\daftarsiswa;
use App\Http\Controllers\TampilDataSiswaController;
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
    return view('home');
});


Route::get('/DaftarSiswa', [daftarsiswa::class, 'siswa']);
Route::get('/DaftarSiswa/tambah', [daftarsiswa::class, 'tambah']);
route::get('/DaftarSiswa/edit', [daftarsiswa::class, 'edit']);

// POST 
Route::post('/DaftarSiswa',[daftarsiswa::class, 'inputdata']);
// get data
// Route::get('/DaftarSiswa', [TampilDataSiswaController::class, 'getdataSiswa']);
