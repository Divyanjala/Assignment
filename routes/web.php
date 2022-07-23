<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AHC;
use App\Http\Controllers\Admin\PoliceController as APC;
use App\Http\Controllers\Admin\FineController as AFC;

use App\Http\Controllers\Police\HomeController as PHC;
use App\Http\Controllers\Police\FineController as PFC;
use App\Http\Controllers\Police\UserController as PUC;

use App\Http\Controllers\User\HomeController as UHC;
use App\Http\Controllers\User\FineController as UFC;
use App\Http\Controllers\User\MedicalController as UMC;
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
Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', [AHC::class, "index"])->name('admin.dashboard');
    Route::get('/police', [APC::class, "index"])->name('admin.police.all');
    Route::get('/police/new', [APC::class, "new"])->name('admin.police.new');
    Route::get('/police/district', [APC::class, "getDistrict"])->name('admin.police.get.district');

    Route::get('/fine', [AFC::class, "index"])->name('admin.fine.all');
});

Route::prefix('/police')->group(function () {
    Route::get('/', [PHC::class, "index"])->name('police.dashboard');
    Route::get('/fine', [PFC::class, "index"])->name('police.fine.list');
    Route::get('/fine/new', [PFC::class, "new"])->name('police.fine.new');

    Route::get('/publicUsers', [PUC::class, "publicUsers"])->name('police.public-users.list');
    Route::get('/policeUsers', [PUC::class, "policeUsers"])->name('police.police-users.list');
});
Route::prefix('/user')->group(function () {
    Route::get('/', [UHC::class, "index"])->name('user.dashboard');
    Route::get('/fine', [UFC::class, "index"])->name('user.fine.list');
    Route::get('/medical', [UMC::class, "index"])->name('user.medical.list');
});


require __DIR__.'/auth.php';
