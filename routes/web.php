<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AHC;
use App\Http\Controllers\Admin\EmployeeController as AEC;
use App\Http\Controllers\Admin\CustomerController as ACC;
use App\Http\Controllers\Admin\StoreController as ASC;
use App\Http\Controllers\Admin\OrderController as AOC;
use App\Http\Controllers\Admin\ProductController as APC;
use App\Http\Controllers\Admin\TaskController as ATC;
use App\Http\Controllers\Admin\PaymentController as APYC;
use App\Http\Controllers\Admin\UserController as AUC;
use App\Http\Controllers\Admin\InventoryItemController as AIIC;
use App\Http\Controllers\Admin\IncomeReportController as IRC;

use App\Http\Controllers\User\HomeController as UHC;

use App\Http\Controllers\User\StoreController as USC;
use App\Http\Controllers\User\OrderController as UOC;
use App\Http\Controllers\User\ProductController as UPC;
use App\Http\Controllers\User\TaskController as UTC;
use App\Http\Controllers\User\PaymentController as UPYC;
use App\Http\Controllers\User\InventoryItemController as UIIC;

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
    Route::get('/department', [AHC::class, "department"])->name('admin.department');

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
    Route::get('/inventoryItem/get', [AIIC::class, "getItem"])->name('admin.inventory-item.get');

    Route::get('/product-store', [ASC::class, "productStore"])->name('admin.product-store');
    Route::get('/product-store/new', [ASC::class, "newProductStore"])->name('admin.product-store.new');
    Route::post('/product-store/store', [ASC::class, "createProductStore"])->name('admin.product-store.store');
    Route::get('/product-store/approve/{id}', [ASC::class, "approveProductStore"])->name('admin.product-store.approve');
    Route::get('/product-store/complete/{id}', [ASC::class, "completeStore"])->name('admin.product-store.complete');

    Route::get('/material-store', [ASC::class, "materialStore"])->name('admin.material-store');
    Route::get('/material-store/new', [ASC::class, "newMaterialStore"])->name('admin.material-store.new');
    Route::post('/material-store/store', [ASC::class, "createMaterialStore"])->name('admin.material-store.store');
    Route::get('/material-store/approve/{id}', [ASC::class, "approveMaterial"])->name('admin.material-store.approve');

    Route::get('/product', [APC::class, "index"])->name('admin.product');
    Route::get('/product/get', [APC::class, "getProduct"])->name('admin.product.get');
    Route::get('/product/new', [APC::class, "new"])->name('admin.product.new');
    Route::post('/product/store', [APC::class, "store"])->name('admin.product.store');
    Route::get('/product/approve/{id}', [APC::class, "approveProduct"])->name('admin.product.approve');

    Route::get('/order', [AOC::class, "index"])->name('admin.order');
    Route::get('/order/new', [AOC::class, "new"])->name('admin.order.new');
    Route::get('/order/view/{id}', [AOC::class, "view"])->name('admin.order.view');
    Route::post('/order/store', [AOC::class, "store"])->name('admin.order.store');
    Route::get('/order/add/store/{id}', [AOC::class, "addStore"])->name('admin.order.add-store');
    Route::get('/order/approve/{id}', [AOC::class, "approveOrder"])->name('admin.order.approve');
    Route::get('/order/complete/{id}', [AOC::class, "completeOrder"])->name('admin.order.complete');

    Route::get('/task', [ATC::class, "index"])->name('admin.task');
    Route::get('/task/new/{id}', [ATC::class, "new"])->name('admin.task.new');
    Route::post('/task/store', [ATC::class, "store"])->name('admin.task.store');
    Route::post('/task/assign', [ATC::class, "assign"])->name('admin.task.assign');
    Route::post('/task/complete', [ATC::class, "complete"])->name('admin.task.complete');

    Route::get('/payment/new/{id}', [APYC::class, "new"])->name('admin.payment.new');
    Route::post('/payment/store', [APYC::class, "store"])->name('admin.payment.store');

    Route::get('/user', [AUC::class, "index"])->name('admin.user');
    Route::get('/user/new', [AUC::class, "new"])->name('admin.user.new');
    Route::post('/user/store', [AUC::class, "store"])->name('admin.user.store');
    Route::get('/user/email', [AUC::class, "validateEmail"])->name('admin.validate-user');

    Route::get('/units', [AHC::class, "units"])->name('admin.units');
    Route::get('/units/new', [AHC::class, "new"])->name('admin.units.new');
    Route::post('/units/store', [AHC::class, "store"])->name('admin.units.store');

    Route::get('/income-report', [IRC::class, "index"])->name('admin.income-report');
});

Route::prefix('/user')->group(function () {
    Route::get('/', [UHC::class, "index"])->name('user.dashboard');

    Route::get('/material-store', [USC::class, "materialStore"])->name('user.material-store');
    Route::get('/material-store/new', [USC::class, "newMaterialStore"])->name('user.material-store.new');
    Route::post('/material-store/store', [USC::class, "createMaterialStore"])->name('user.material-store.store');
    Route::get('/material-store/approve/{id}', [USC::class, "approveMaterial"])->name('user.material-store.approve');

    Route::get('/product-store', [USC::class, "productStore"])->name('user.product-store');
    Route::get('/product-store/new', [USC::class, "newProductStore"])->name('user.product-store.new');
    Route::post('/product-store/store', [USC::class, "createProductStore"])->name('user.product-store.store');
    Route::get('/product-store/approve/{id}', [USC::class, "approveProductStore"])->name('user.product-store.approve');
    Route::get('/product-store/complete/{id}', [USC::class, "completeStore"])->name('user.product-store.complete');


    Route::get('/product', [UPC::class, "index"])->name('user.product');
    Route::get('/product/get', [UPC::class, "getProduct"])->name('user.product.get');
    Route::get('/product/new', [UPC::class, "new"])->name('user.product.new');
    Route::post('/product/store', [UPC::class, "store"])->name('user.product.store');

    Route::get('/order', [UOC::class, "index"])->name('user.order');
    Route::get('/order/new', [UOC::class, "new"])->name('user.order.new');
    Route::get('/order/view/{id}', [UOC::class, "view"])->name('user.order.view');
    Route::post('/order/store', [UOC::class, "store"])->name('user.order.store');
    Route::get('/order/add/store/{id}', [UOC::class, "addStore"])->name('user.order.add-store');

    Route::get('/task', [UTC::class, "index"])->name('user.task');
    Route::get('/task/new/{id}', [UTC::class, "new"])->name('user.task.new');
    Route::post('/task/store', [UTC::class, "store"])->name('user.task.store');
    Route::post('/task/assign', [UTC::class, "assign"])->name('user.task.assign');

    Route::get('/payment/new/{id}', [UPYC::class, "new"])->name('user.payment.new');
    Route::post('/payment/store', [UPYC::class, "store"])->name('user.payment.store');
});


require __DIR__.'/auth.php';
