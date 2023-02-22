<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Mail;

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

route::get('/', [HomeController::class,'index']);

Route::get('/about', [HomeController::class,'about']);

Route::get('/contact', [HomeController::class,'contact']);

Route::get('/shop', [HomeController::class,'shop']);

Route::get('/courses', [HomeController::class,'courses']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/view_category',[AdminController::class, 'view_category']);

Route::post('/add_category',[AdminController::class, 'add_category']);

Route::get('/delete_category/{id}',[AdminController::class, 'delete_category']);

Route::get('/view_product',[AdminController::class, 'view_product']);

Route::post('/add_product',[AdminController::class, 'add_product']);

Route::get('/show_product',[AdminController::class, 'show_product']);

Route::get('/delete_product/{id}',[AdminController::class, 'delete_product']);

Route::get('/update_product/{id}',[AdminController::class, 'update_product']);

Route::post('/update_product_confirm/{id}',[AdminController::class, 'update_product_confirm']);

Route::get('/view_course',[AdminController::class, 'view_course']);

Route::post('/add_course',[AdminController::class, 'add_course']);

Route::get('/show_course',[AdminController::class, 'show_course']);

Route::get('/view_images/{id}',[AdminController::class, 'view_images'])->name('course.images');

Route::get('/delete_course/{id}',[AdminController::class, 'delete_course']);

Route::get('/update_course/{id}',[AdminController::class, 'update_course']);

Route::post('/update_course_confirm/{id}',[AdminController::class, 'update_course_confirm']);

Route::get('/order',[AdminController::class, 'order']);

Route::get('/searchprod', [AdminController::class, 'searchProd']);

Route::get('/searchuser', [HomeController::class, 'searchProdUser']);

Route::get('/delivered/{id}',[AdminController::class, 'delivered']);

Route::get('/view_brand',[AdminController::class, 'view_brand']);

Route::post('/add_brand',[AdminController::class, 'add_brand']);

Route::get('/delete_brand/{id}',[AdminController::class, 'delete_brand']);



Route::get('/product_details/{id}',[HomeController::class, 'product_details']);

Route::get('/course_details/{id}',[HomeController::class, 'course_details']);

Route::get('/category/{category}',[HomeController::class, 'category']);

Route::get('/brand/{brand}',[HomeController::class, 'brand']);

Route::post('/add_cart', [HomeController::class, 'add_cart']);

Route::get('/show_cart',[HomeController::class, 'show_cart']);

Route::post('/cart/update', [HomeController::class, 'cartUpdate']);

Route::post('/cart/delete', [HomeController::class, 'cartDelete']);

Route::get('/checkout', [HomeController::class, 'checkout']);

Route::post('/cash_order',[HomeController::class, 'cash_order']);

Route::get('/contact-us', [SendEmailController::class, 'contact']);

Route::post('/send-message', [SendEmailController::class, 'sendEmail']);

Route::get('/sendemail', [SendEmailController::class, 'index']);

Route::post('/sendemail/send', [SendEmailController::class, 'send']);

Route::get('/search', [AdminController::class, 'searchdata']);

Route::get('/view_users',[AdminController::class, 'view_users']);

Route::get('/update_user/{id}',[AdminController::class, 'update_user']);

Route::post('/update_user_confirm/{id}',[AdminController::class, 'update_user_confirm']);

Route::get('/delete_user/{id}',[AdminController::class, 'delete_user']);

Route::get('/approve_account/{id}',[AdminController::class, 'approve_account']);

Route::get('/send_email/{id}',[AdminController::class, 'send_email']);

route::post('/send_user_email/{id}',[AdminController::class, 'send_user_email']);
Route::get('/myorder',[HomeController::class, 'MyOrders']);

