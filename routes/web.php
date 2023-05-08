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

Route::get('HomeP', [App\Http\Controllers\JumiaHController::class, 'HomeP'])->name('HomeP');

Route::get('Productlist', [App\Http\Controllers\JumiaHController::class, 'Productlist'])->name('Productlist');
Route::post('Store', [App\Http\Controllers\JumiaHController::class, 'Store'])->name('Store');
Route::patch('update/{id}', [App\Http\Controllers\JumiaHController::class, 'update'])->name('update');
Route::get('delete/{id}', [App\Http\Controllers\JumiaHController::class, 'delete'])->name('delete');

Route::get('myCART', [App\Http\Controllers\JumiaHController::class, 'myCART'])->name('myCART');
Route::post('my_cart', [App\Http\Controllers\JumiaHController::class, 'my_cart'])->name('my_cart');
Route::get('delete2/{id}', [App\Http\Controllers\JumiaHController::class, 'delete2'])->name('delete2');
Route::patch('update2/{id}', [App\Http\Controllers\JumiaHController::class, 'update2'])->name('update2');

Route::get('airPod', [App\Http\Controllers\JumiaHController::class, 'airPod'])->name('airPod');

Route::get('Phone', [App\Http\Controllers\JumiaHController::class, 'Phone'])->name('Phone');

Route::get('Beauty', [App\Http\Controllers\MybeautyController::class, 'Beauty'])->name('Beauty');
Route::post('Bstore', [App\Http\Controllers\MybeautyController::class, 'Bstore'])->name('Bstore');

Route::get('Supermarket', [App\Http\Controllers\MybeautyController::class, 'Supermarket'])->name('Supermarket');

Route::get('Office', [App\Http\Controllers\MybeautyController::class, 'Office'])->name('Office');

Route::post('order', [App\Http\Controllers\JumiaHController::class, 'order'])->name('order');

Route::get('About', [App\Http\Controllers\JumiaHController::class, 'About'])->name('About');

