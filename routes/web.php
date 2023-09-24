<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['middleware' => ['auth']], function(){
    Route::get('/', function () {
        return view('Admin.Menu.dasbord');
    });
});


Route::post('/checkout', [UserController::class,'checkout']);
Route::get('order/{order}', [UserController::class, 'order_user']);
Route::post('order/{order}/pay', [UserController::class, 'payment']);





Route::get('/shopping_cart', function () {
    return view('Admin.Menu.shopping_cart');
});
Route::get('/ongkir', function(){
            return '';
});

Route::group(['middleware' => ['guest']], function(){
    Route::get('/register', function(){
        return view('User.Auth.register');
    });
    Route::get('/login', function(){
        return view('User.Auth.login');
    })->name('login');
    Route::post('signin', [UserController::class, 'signin']);
    Route::post('signup', [UserController::class, 'signup']);

});
Route::get('logout', [UserController::class, 'logout']);


Route::get('add_product', [AdminController::class, 'add_product'])->name('add_product');
Route::post('add_product', [AdminController::class, 'store_add_product'])->name('store_product');
Route::post('/shopping_cart', [AdminController::class, 'cart'])->name('cart');
Route::get('prd', [AdminController::class, 'prd'])->name('prd');
Route::get('/prd/{id}/show', [AdminController::class, 'show'])->name('show');
Route::get('product', [AdminController::class, 'product'])->name('product');
Route::get('edit/{product}', [AdminController::class, 'edit'])->name('edit');
Route::patch('update/{product}', [AdminController::class, 'update'])->name('update');
Route::get('/add_to_cart/{id}', [AdminController::class, 'addToCart'])->name('add_to_cart');
Route::delete('remove_from_cart', [AdminController::class, 'remove'])->name('remove_from_cart');
Route::patch('update_cart', [AdminController::class, 'update'])->name('update_cart');
Route::get('post', [AdminController::class, 'post']);

