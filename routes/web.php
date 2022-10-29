<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\marketplace;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->middleware(['auth'])->name('dashboard');


    Route::get('/admin/logout', [adminController::class, 'logout'])->name('admin.logout');
});


Route::get('daftar_barang', [marketplace::class, 'daftarBarang'])->name('daftarBarang.view');
Route::get('review_Barang/{id}', [marketplace::class, 'reviewBarang'])->name('reviewBarang.view');
