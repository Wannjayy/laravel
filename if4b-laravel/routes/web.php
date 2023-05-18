<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/profil', function(){
    return "Halaman profil";
});

Route::get('/dosen',function(){
    return view('dosen');
});

Route::get('/dosen/index',function(){
    return view('dosen.index');
});

// Route::get('/fakultas',function (){
//     // return view('fakultas.index',['fikr' => 'Fakultas Ilmu komputer dan rekayasa']);
    
// });

// Route::get('prodi', [ProdiControllers::class, 'index'])->name('user');

Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

Route::resource('fakultas', FakultasController::class)->middleware('auth');

Route::resource('prodi', ProdiController::class)->middleware('auth');

Route::resource('mahasiswa', MahasiswaController::class)->middleware('auth');
