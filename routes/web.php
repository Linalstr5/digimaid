<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContractsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\MaidsController;
use App\Http\Controllers\AdminController;

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

Route::get('/landing', [AuthController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/show_register', [AuthController::class, 'show_register']);
Route::post('/auth/register', [AuthController::class, 'register']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/akun', [AdminController::class, 'user']);
Route::delete('admin/akun/hapus/{id}', [AdminController::class, 'hapus_akun']);
Route::post('/admin/akun/tambah', [AdminController::class, 'tambah_user']);
Route::get('/admin/histories', [AdminController::class, 'histories']);
Route::get('/admin/maids', [AdminController::class, 'maids']);
Route::delete('/admin/maids/hapus/{id}', [AdminController::class, 'maids_hapus']);
Route::get('/admin/customers', [AdminController::class, 'customers']);
Route::delete('/admin/customers/hapus/{id}', [AdminController::class, 'customers_hapus']);
Route::get('/admin/payment', [AdminController::class, 'payment']);
Route::get('/admin/change_psw', [AdminController::class, 'change_psw']);
Route::put('/admin/change_psw/process', [AdminController::class, 'change_psw_process']);

Route::get('/maids', [MaidsController::class, 'index']);
Route::get('/maids/offer/received', [MaidsController::class, 'offer_received']);
Route::get('/maids/offering/detail/{id}', [MaidsController::class, 'detail_offer']);
// Route::put('/maids/offering/accept/{id}', [MaidsController::class, 'accept_offer']);
// Route::put('/maids/offering/decline/{id}', [MaidsController::class, 'decline_offer']);
Route::put('/maids/offering/respond/{id}', [MaidsController::class, 'respond_offer']);
Route::get('/maids/history', [MaidsController::class, 'histories']);
Route::get('/maids/invoice/{id}', [MaidsController::class, 'generate_invoice']);
// Route::get('/maids/get_invoice/{id}', [MaidsController::class, 'get_invoice']);
Route::post('/maids/invoice/send', [MaidsController::class, 'send_invoice']);
Route::get('/maids/invoice_sent', [MaidsController::class, 'invoice_sent']);
Route::get('/maids/change_psw', [MaidsController::class, 'change_psw']);
Route::put('/maids/change_psw/process', [MaidsController::class, 'change_psw_process']);

Route::get('/customers', [CustomersController::class, 'index']);
Route::get('/customers/maids', [CustomersController::class, 'maids']);
Route::get('/customers/offering/{id}', [CustomersController::class, 'offering']);
Route::post('/customers/offering/send', [CustomersController::class, 'send_offering']);
Route::get('/customers/offer/sent', [CustomersController::class, 'offer_sent']);
Route::get('/customers/offer/active', [CustomersController::class, 'offer_active']);
Route::get('/customers/histories', [CustomersController::class, 'histories']);
Route::get('/customers/review/{id}', [CustomersController::class, 'review']);
Route::put('/customers/review/send/{id}', [CustomersController::class, 'review_send']);
Route::get('/customers/payment', [CustomersController::class, 'payment_check']);
Route::get('/customers/payment/{id}', [CustomersController::class, 'payment_get']);
Route::get('/customer/change_psw', [CustomersController::class, 'change_psw']);
Route::put('/customers/change_psw/process', [CustomersController::class, 'change_psw_process']);    

Route::get('logout', [AuthController::class, 'logout']);
