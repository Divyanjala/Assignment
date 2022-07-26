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
    Route::post('/police/create', [APC::class, "create"])->name('admin.police.create');
    Route::post('/police/update', [APC::class, "update"])->name('admin.police.update');
    Route::get('/police/edit/{id}', [APC::class, "edit"])->name('admin.police.edit');

    Route::get('/fine', [AFC::class, "index"])->name('admin.fine.all');
    Route::get('/fine/new', [AFC::class, "new"])->name('admin.fine.new');
    Route::post('/fine/create', [AFC::class, "create"])->name('admin.fine.create');
    Route::post('/fine/update', [AFC::class, "update"])->name('admin.fine.update');
    Route::get('/fine/edit/{id}', [AFC::class, "edit"])->name('admin.fine.edit');
});

Route::prefix('/police')->group(function () {
    Route::get('/', [PHC::class, "index"])->name('police.dashboard');
    Route::get('/fine', [PFC::class, "index"])->name('police.fine.list');
    Route::get('/fine/new', [PFC::class, "new"])->name('police.fine.new');
    Route::post('/fine/create', [PFC::class, "create"])->name('police.fine.create');
    Route::post('/fine/update', [PFC::class, "update"])->name('police.fine.update');
    Route::get('/fine/edit/{id}', [PFC::class, "edit"])->name('police.fine.edit');
    Route::get('/fine/licence', [PFC::class, "getLicence"])->name('police.fine.get-licence');

    Route::get('/publicUsers', [PUC::class, "publicUsers"])->name('police.public-users.list');

    Route::get('/policeUsers', [PUC::class, "policeUsers"])->name('police.police-users.list');
    Route::get('/policeUsers/new', [PUC::class, "policeUsersNew"])->name('police.public-users.new');
    Route::post('/policeUsers/create', [PUC::class, "policeUsersCreate"])->name('police.public-users.create');
    Route::post('/policeUsers/update', [PUC::class, "policeUsersUpdate"])->name('police.public-users.update');
    Route::get('/policeUsers/edit/{id}', [PUC::class, "policeUsersEdit"])->name('police.public-users.edit');
});
Route::prefix('/user')->group(function () {
    Route::get('/', [UHC::class, "index"])->name('user.dashboard');
    Route::get('/fine', [UFC::class, "index"])->name('user.fine.list');
    Route::get('/fine/payment/{id}', [UFC::class, "payment"])->name('user.fine.payment');
    Route::post('/fine/pay', [UFC::class, "pay"])->name('user.fine.pay');

    Route::get('/medical', [UMC::class, "index"])->name('user.medical.list');
    Route::get('/medical/new', [UMC::class, "new"])->name('user.medical.new');
    Route::post('/medical/create', [UMC::class, "create"])->name('user.medical.create');
    Route::post('/medical/update', [UMC::class, "update"])->name('user.medical.update');
    Route::get('/medical/edit/{id}', [UMC::class, "edit"])->name('user.medical.edit');
});


require __DIR__.'/auth.php';
