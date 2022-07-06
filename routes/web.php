<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agent\HomeController as AHC;
use App\Http\Controllers\Agent\TicketController as ATC;

use App\Http\Controllers\Customer\HomeController as CHC;
use App\Http\Controllers\Customer\TicketController as CTC;
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

Route::prefix('/agent')->group(function () {
    Route::get('/', [AHC::class, "index"])->name('agent.dashboard');
    Route::get('/ticket', [ATC::class, "tickets"])->name('agent.ticket.all');
    Route::get('/ticket/get', [ATC::class, "getTicket"])->name('agent.get.ticket');
    Route::post('/ticket/reply', [ATC::class, "reply"])->name('agent.ticket.reply');
});
Route::prefix('/customer')->group(function () {
    Route::get('/ticket', [CTC::class, "new"])->name('customer.ticket.new');
    Route::post('/ticket/store', [CTC::class, "store"])->name('customer.ticket.store');
    Route::get('/ticket/get', [CTC::class, "getTicket"])->name('customer.get.ticket');
});


require __DIR__.'/auth.php';
