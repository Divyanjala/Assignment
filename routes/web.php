<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AHC;
use App\Http\Controllers\Admin\EmployeeController as AEC;
use App\Http\Controllers\Admin\CustomerController as ACC;
use App\Http\Controllers\Admin\StoreController as ASC;
use App\Http\Controllers\Admin\OrderController as AOC;
use App\Http\Controllers\Admin\ProductController as APC;
use App\Http\Controllers\Admin\InventoryItemController as AIIC;

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

    Route::get('/customer', [ACC::class, "index"])->name('admin.customer');
    Route::get('/customer/new', [ACC::class, "new"])->name('admin.customer.new');
    Route::post('/customer/store', [ACC::class, "store"])->name('admin.customer.store');

    Route::get('/inventoryItem', [AIIC::class, "index"])->name('admin.inventory-item');
    Route::get('/inventoryItem/new', [AIIC::class, "new"])->name('admin.inventory-item.new');
    Route::post('/inventoryItem/store', [AIIC::class, "store"])->name('admin.inventory-item.store');

    Route::get('/product-store', [ASC::class, "productStore"])->name('admin.product-store');
    Route::get('/product-store/new', [ASC::class, "newProductStore"])->name('admin.product-store.new');
    Route::post('/product-store/store', [ASC::class, "createProductStore"])->name('admin.product-store.store');

    Route::get('/material-store', [ASC::class, "materialStore"])->name('admin.material-store');
    Route::get('/material-store/new', [ASC::class, "newMaterialStore"])->name('admin.material-store.new');
    Route::post('/material-store/store', [ASC::class, "createMaterialStore"])->name('admin.material-store.store');
    Route::get('/material-store/approve/{id}', [ASC::class, "approveMaterial"])->name('admin.material-store.approve');

    Route::get('/product', [APC::class, "index"])->name('admin.product');
    Route::get('/product/new', [APC::class, "new"])->name('admin.product.new');
    Route::post('/product/store', [APC::class, "store"])->name('admin.product.store');

    Route::get('/order', [AOC::class, "index"])->name('admin.order');
    Route::get('/order/new', [AOC::class, "new"])->name('admin.order.new');
    Route::post('/order/store', [AOC::class, "store"])->name('admin.order.store');
});

Route::prefix('/user')->group(function () {
    Route::get('/', [UHC::class, "index"])->name('user.dashboard');

});


require __DIR__.'/auth.php';
