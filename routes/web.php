<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AHC;
use App\Http\Controllers\Admin\EmployeeController as AEC;

use App\Http\Controllers\User\HomeController as UHC;
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
    Route::get('/employee', [AEC::class, "index"])->name('admin.employee');
    Route::get('/employee/new', [AEC::class, "new"])->name('admin.employee.new');
    Route::post('/employee/store', [AEC::class, "store"])->name('admin.employee.store');
    Route::get('/validate/email', [AEC::class, "validateEmail"])->name('admin.validate-email');
});

Route::prefix('/user')->group(function () {
    Route::get('/', [UHC::class, "index"])->name('user.dashboard');

});


require __DIR__.'/auth.php';
