<?php

use Illuminate\Support\Facades\Route;



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


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('clear_cache', function () {
//
//    \Artisan::call('optimize:clear');
//    return redirect()->route('home')->with("success","Cache is cleared");
//    // dd("Cache is cleared");
//
//});

Route::group(['middleware' => ['auth','role']], function () {

//Route::group(['middleware' => ['auth']], function () {

    Route::get('gents/create', [\App\Http\Controllers\admin\GentsController::class, 'create'])->name('gents/create');
    Route::post('gents/store', [\App\Http\Controllers\admin\GentsController::class, 'store'])->name('gents/store');
    Route::get('gents/show', [\App\Http\Controllers\admin\GentsController::class, 'show'])->name('gents/show');
    Route::get('gents/destroy/{id}', [\App\Http\Controllers\admin\GentsController::class, 'destroy'])->name('gents/destroy');
    Route::get('gents/clothes/show', [\App\Http\Controllers\admin\GentsController::class, 'index'])->name('gents/clothes/show');
    Route::get('gents/clothes/destroy/{id}', [\App\Http\Controllers\admin\GentsController::class, 'gents_clothes_destroy'])->name('gents/clothes/destroy');

    Route::get('girls/show', [\App\Http\Controllers\admin\GirlsController::class, 'show'])->name('girls/show');
    Route::get('girls/destroy/{id}', [\App\Http\Controllers\admin\GirlsController::class, 'destroy'])->name('girls/destroy');

    Route::get('child/show', [\App\Http\Controllers\admin\GirlsController::class, 'child_show'])->name('child/show');
    Route::get('child/destroy/{id}', [\App\Http\Controllers\admin\GirlsController::class, 'child_destroy'])->name('child/destroy');


    Route::get('mail.show', [\App\Http\Controllers\admin\MailController::class, 'show'])->name('mail.show');
    Route::get('mail.edit/{id}', [\App\Http\Controllers\admin\MailController::class, 'edit'])->name('mail.edit');
    Route::post('mail.update/{id}', [\App\Http\Controllers\admin\MailController::class, 'update'])->name('mail.update');

    Route::get('shoes/show',[\App\Http\Controllers\admin\GentsController::class,'shoes_show'])->name('shoes/show');
    Route::get('shoes/destroy/{id}',[\App\Http\Controllers\admin\GentsController::class,'shoes_destroy'])->name('shoes/destroy');

    Route::get('jacket/show',[\App\Http\Controllers\admin\GentsController::class,'jacket_show'])->name('jacket/show');
    Route::get('jacket/destroy/{id}',[\App\Http\Controllers\admin\GentsController::class,'jacket_destroy'])->name('jacket/destroy');

    Route::get('blazer/show',[\App\Http\Controllers\admin\GentsController::class,'blazer_show'])->name('blazer/show');
    Route::get('blazer/destroy/{id}',[\App\Http\Controllers\admin\GentsController::class,'blazer_destroy'])->name('blazer/destroy');

    Route::get('users', [\App\Http\Controllers\admin\UserController::class, 'index'])->name('users.index');
    Route::post('users-send-email', [\App\Http\Controllers\admin\UserController::class, 'sendEmail'])->name('ajax.send.email');

    Route::get('jumpsuit/show',[\App\Http\Controllers\admin\GentsController::class,'jumpsuit_show'])->name('jumpsuit/show');
    Route::get('jumpsuit/destroy/{id}',[\App\Http\Controllers\admin\GentsController::class,'jumpsuit_destroy'])->name('jumpsuit/destroy');
    Route::get('sportswear/show',[\App\Http\Controllers\admin\GentsController::class,'sportswear_show'])->name('sportswear/show');
    Route::get('sportswear/destroy/{id}',[\App\Http\Controllers\admin\GentsController::class,'sportswear_destroy'])->name('sportswear/destroy');

});
Route::post('mail.store', [\App\Http\Controllers\admin\MailController::class, 'store'])->name('mail.store');

// Shopping Route

Route::get('shop', [\App\Http\Controllers\HomeController::class, 'shop'])->name('shop');
Route::get('cart', [\App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('checkout/{id}', [\App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('shop/detail/{id}', [\App\Http\Controllers\HomeController::class, 'shop_detail'])->name('shop/detail');
Route::get('add/cart/{id}', [\App\Http\Controllers\HomeController::class, 'add_cart'])->name('add/cart');

Route::get('men/dress', [\App\Http\Controllers\HomeController::class, 'men_show'])->name('men/dress');
Route::get('women/dress', [\App\Http\Controllers\HomeController::class, 'women_show'])->name('women/dress');
Route::get('child/dress', [\App\Http\Controllers\HomeController::class, 'child_show'])->name('child/dress');

Route::get('shirt', [\App\Http\Controllers\HomeController::class, 'shirt'])->name('shirt');
Route::get('jeans', [\App\Http\Controllers\HomeController::class, 'jeans'])->name('jeans');
Route::get('shoes', [\App\Http\Controllers\HomeController::class, 'shoes'])->name('shoes');
Route::get('blazer', [\App\Http\Controllers\HomeController::class, 'blazer'])->name('blazer');
Route::get('jumpsuit',[\App\Http\Controllers\HomeController::class,'jumpsuit'])->name('jumpsuit');
Route::get('jacket',[\App\Http\Controllers\HomeController::class,'jacket'])->name('jacket');
Route::get('sportswear',[\App\Http\Controllers\HomeController::class,'sportswear'])->name('sportswear');

Route::get('price_product',[\App\Http\Controllers\HomeController::class,'price_product'])->name('price_product');
Route::get('color',[\App\Http\Controllers\HomeController::class,'color'])->name('color');
Route::get('size',[\App\Http\Controllers\HomeController::class,'size'])->name('size');

Route::get('product/search',[\App\Http\Controllers\HomeController::class,'product_search'])->name('product/search');
Route::get('shop_price',[\App\Http\Controllers\HomeController::class,'shop_price'])->name('shop_price');
