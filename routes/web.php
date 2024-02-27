<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
 /* Users: 0=>super-admin   , 1=>trucker,  2=>shipper, 3=>broker */


Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
  
    Route::get('/admin/dashboard', [HomeController::class, 'SuperAdminDashboard'])->name('super-admin.dashboard');
});

Route::middleware(['auth', 'user-access:trucker'])->group(function () {
  
    Route::get('/trucker/dashboard', [HomeController::class, 'truckerDashboard'])->name('trucker.dashboard');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:shipper'])->group(function () {
  
    Route::get('/shipper/dashboard', [HomeController::class, 'shipperDashboard'])->name('shipper.dashboard');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:broker'])->group(function () {
  
    Route::get('/broker/dashboard', [HomeController::class, 'brokerDashboard'])->name('broker.dashboard');
});
 