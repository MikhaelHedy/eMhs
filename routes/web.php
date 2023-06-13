<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use App\Http\Controllers\pageController;
use App\Http\Controllers\AuthController;
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
Route::middleware(['auth'])->group(function (){
    Route::get('/home', [pageController::class, 'home']);
    Route::get('/profile', [pageController::class, 'profile']);
    Route::get('/mahasiswa', [pageController::class, 'mahasiswa']);
    Route::get('/contact', [pageController::class, 'contact']);
});
Route::get('/mahasiswa/pencarian', [pageController::class, 'pencarian']);
Route::get('/mahasiswa/tambah', [pageController::class, 'tambah']);
Route::get('/mahasiswa/edit/{id}',[pageController::class, 'edit']);
Route::put('/mahasiswa/update/{id}',[pageController::class, 'update']);
Route::get('/mahasiswa/delete/{id}',[pageController::class, 'delete']);
Route::post('/mahasiswa/simpan', [pageController::class, 'simpan']);
Route::get('/register',[AuthController::class, 'register']);
Route::post('/simpan',[AuthController::class, 'simpan']);
Route::get('/', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/cekLogin', [AuthController::class, 'cekLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/index', function(){
    return view('index')->middleware('auth');
});
