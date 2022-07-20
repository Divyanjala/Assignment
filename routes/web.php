<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AHC;

use App\Http\Controllers\Police\HomeController as PHC;
use App\Http\Controllers\Police\TicketController as PTC;

use App\Http\Controllers\User\HomeController as CHC;
use App\Http\Controllers\User\TicketController as CTC;
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
});

Route::prefix('/police')->group(function () {
    Route::get('/', [PHC::class, "index"])->name('police.dashboard');
    Route::get('/ticket', [PTC::class, "tickets"])->name('police.ticket.all');
    Route::get('/ticket/get', [PTC::class, "getTicket"])->name('police.get.ticket');
    Route::post('/ticket/reply', [PTC::class, "reply"])->name('police.ticket.reply');
});
Route::prefix('/user')->group(function () {
    Route::get('/ticket', [CTC::class, "new"])->name('user.ticket.new');
    Route::post('/ticket/store', [CTC::class, "store"])->name('user.ticket.store');
    Route::get('/ticket/get', [CTC::class, "getTicket"])->name('user.get.ticket');
});


require __DIR__.'/auth.php';
