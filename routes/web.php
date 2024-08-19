<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('home/index');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('shop', [HomeController::class, 'shop']);
Route::get('why_us', [HomeController::class, 'why_us']);
Route::get('testimonial', [HomeController::class, 'testimonial']);
Route::get('contact', [HomeController::class, 'contact']);


// user
Route::get('/dashboard', [HomeController::class, 'home_user'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('detail_product/{slug}', [HomeController::class, 'detail_product']);
Route::get('add_cart/{id}', [HomeController::class, 'add_cart'])->middleware(['auth', 'verified']);

Route::get('mycart', [HomeController::class, 'mycart'])->middleware(['auth', 'verified']);
Route::post('confirm_order', [HomeController::class, 'confirm_order'])->middleware(['auth', 'verified']);
Route::get('myorders', [HomeController::class, 'myorders'])->middleware(['auth', 'verified']);

// payment with card
Route::controller(HomeController::class)->group(function(){
    Route::get('stripe/{totalPrice}', 'stripe');
    Route::post('stripe/{totalPrice}', 'stripePost')->name('stripe.post');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// admin
route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

//category
route::get('view_category', [AdminController::class, 'view_category'])->middleware(['auth', 'admin']);
route::post('/add_category', [AdminController::class, 'add_category'])->middleware(['auth', 'admin']);
route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->middleware(['auth', 'admin']);
route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->middleware(['auth', 'admin']);
route::post('/update_category/{id}', [AdminController::class, 'update_category'])->middleware(['auth', 'admin']);

// product
route::get('add_product', [AdminController::class, 'add_product'])->middleware(['auth', 'admin']);
route::post('store_product', [AdminController::class, 'store_product'])->middleware(['auth', 'admin']);
route::get('view_product', [AdminController::class, 'view_product'])->middleware(['auth', 'admin']);
route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->middleware(['auth', 'admin']);
route::get('edit_product/{id}', [AdminController::class, 'edit_product'])->middleware(['auth', 'admin']);
route::post('update_product/{id}', [AdminController::class, 'update_product'])->middleware(['auth', 'admin']);
route::get('search_product', [AdminController::class, 'search_product'])->middleware(['auth', 'admin']);

// order
Route::get('view_orders', [AdminController::class, 'view_order'])->middleware(['auth', 'verified']);
// change status order
Route::get('on_the_way/{id}', [AdminController::class, 'on_the_way'])->middleware(['auth', 'verified']);
Route::get('delivery/{id}', [AdminController::class, 'delivery'])->middleware(['auth', 'verified']);
Route::get('done/{id}', [AdminController::class, 'done'])->middleware(['auth', 'verified']);
// print pdf
Route::get('print_pdf/{id}', [AdminController::class, 'print_pdf'])->middleware(['auth', 'verified']);

