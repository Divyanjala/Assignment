<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AHC;

use App\Http\Controllers\Admin\PlantController as APC;
use App\Http\Controllers\Admin\FishController as AFC;
use App\Http\Controllers\Admin\UserController as AUC;
use App\Http\Controllers\Admin\IncomeReportController as IRC;

use App\Http\Controllers\User\HomeController as UHC;

use App\Http\Controllers\User\StoreController as USC;
use App\Http\Controllers\User\OrderController as UOC;
use App\Http\Controllers\User\ProductController as UPC;
use App\Http\Controllers\User\TaskController as UTC;
use App\Http\Controllers\User\PaymentController as UPYC;

use App\Http\Controllers\User\GrowthController as GTC;
use App\Http\Controllers\User\DiseasesController as DTC;
use App\Http\Controllers\User\HealthController as HTC;
use App\Http\Controllers\User\TipsController as TTC;
use App\Http\Controllers\User\TreatmentController as TRC;
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

    Route::get('/plant', [APC::class, "index"])->name('admin.plant');
    Route::get('/plant/get', [APC::class, "getPlant"])->name('admin.plant.get');
    Route::get('/plant/new', [APC::class, "new"])->name('admin.plant.new');
    Route::post('/plant/store', [APC::class, "store"])->name('admin.plant.store');

    Route::get('/fish', [AFC::class, "index"])->name('admin.fish');
    Route::get('/fish/get', [AFC::class, "getFish"])->name('admin.fish.get');
    Route::get('/fish/new', [AFC::class, "new"])->name('admin.fish.new');
    Route::post('/fish/store', [AFC::class, "store"])->name('admin.fish.store');


    Route::get('/user', [AUC::class, "index"])->name('admin.user');
    Route::get('/user/new', [AUC::class, "new"])->name('admin.user.new');
    Route::post('/user/store', [AUC::class, "store"])->name('admin.user.store');
    Route::get('/user/email', [AUC::class, "validateEmail"])->name('admin.validate-user');

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


    Route::get('/growth', [GTC::class, "index"])->name('user.growth');
    Route::get('/growth/rate', [GTC::class, "rate"])->name('user.growth.rate');
    Route::post('/growth/store', [GTC::class, "store"])->name('user.growth.store');
    Route::get('/growth/delete/{id}', [GTC::class, "delete"])->name('user.growth.delete');

    Route::get('/health', [HTC::class, "index"])->name('user.health');
    Route::get('/health/shedule', [HTC::class, "shedule"])->name('user.health.shedule');
    Route::post('/health/store', [HTC::class, "store"])->name('user.health.store');

    Route::get('/diseases', [DTC::class, "index"])->name('user.diseases');
    Route::get('/diseases/plant', [DTC::class, "plant"])->name('user.diseases.plant');
    Route::get('/diseases/fish', [DTC::class, "fish"])->name('user.diseases.fish');


    Route::get('/tips', [TTC::class, "index"])->name('user.tips');


    Route::get('/treatment', [TRC::class, "index"])->name('user.treatment');
});


require __DIR__ . '/auth.php';
