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

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas.index');
    Route::get('/fakultas/create', [FakultasController::class, 'create'])->name('fakultas.create');
    Route::post('/fakultas', [FakultasController::class, 'store'])->name('fakultas.store');
    Route::get('/fakultas/{id}', [FakultasController::class, 'show'])->name('fakultas.show');
    Route::get('/fakultas/{id}/edit', [FakultasController::class, 'edit'])->name('fakultas.edit');
    Route::put('/fakultas/{id}', [FakultasController::class, 'update'])->name('fakultas.update');
    Route::delete('/fakultas/{id}', [FakultasController::class, 'destroy'])->name('fakultas.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
    Route::get('/prodi/create', [ProdiController::class, 'create'])->name('prodi.create')->middleware('adm');
    Route::post('/prodi', [ProdiController::class, 'store'])->name('prodi.store');
    Route::get('/prodi/{prodi}', [ProdiController::class, 'show'])->name('prodi.show');
    Route::get('/prodi/{prodi}/edit', [ProdiController::class, 'edit'])->name('prodi.edit');
    Route::put('/prodi/{prodi}', [ProdiController::class, 'update'])->name('prodi.update');
    Route::delete('/prodi/{prodi}', [ProdiController::class, 'destroy'])->name('prodi.destroy')->middleware('adm');
});

Route::middleware('auth')->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
    Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::post('/mahasiswa/destroy', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});

