<?php

use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\BagitoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('auth.register');
// });

Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'register_action'])->name('register.action');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'login_action'])->name('login.action');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/editprofil', [MenuController::class, 'edittampilan']);
    Route::get('/editprofil/{editprofil}/edit',[MenuController::class,'edit_profil']);
    Route::patch('editprofil/{editprofil}',[MenuController::class,'updateprofiles'])->name('edit.update');
    Route::get('/post/{post}', function () {})->name('post.show');
    Route::get('/route-url',[MenuController::class, 'generatelink']);

    Route::get('buat-judul', [MenuController::class, 'judul']);

    Route::post('buat-link', [MenuController::class, 'buatlink']);
    Route::get('buat-link/slug', [MenuController::class, 'chekSlug']);

    Route::get('/analisis', [MenuController::class, 'analitic']);
    Route::get('/chart', [AnalisisController::class, 'chart']);

    Route::get('/bagito', [MenuController::class, 'link']);
    Route::post('buat-bagi-to', [BagitoController::class, 'storeto']);
    Route::get('bagito/filter', [BagitoController::class, 'filter']);
    Route::delete('bagito/{bagito}',[ BagitoController::class, 'destroyto' ]);

    Route::get('/link_management', [MenuController::class, 'user']);

    Route::get('buat-galang-dana', [MenuController::class, 'galang']);
    Route::post('new-galang-dana', [MenuController::class, 'buat_galang']);

    Route::get('artikel/create', [MenuController::class, 'create_artikel']);
    Route::post('artikel', [MenuController::class, 'add_artikel']);

    Route::get('prof', [MenuController::class, 'cek_prof']);
    Route::post('/cek_kab',[MenuController::class, 'cek_kab'])->name('cek_kab');

    Route::get('qrcode', [QrController::class, 'qrcode']);
    Route::get('qrcode/{id}', [QrController::class, 'generateqr'])->name('generate');

    Route::post('/logout', [LoginController::class, 'logout']);
});


// Route::post('coba',[MenuController::class, 'buat_galang']);

//view user
Route::get('/berbagibahagia_link', [UserController::class, 'index']);