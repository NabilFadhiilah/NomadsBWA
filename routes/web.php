<?php

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

use App\Http\Controllers\Admin\DashboardController;
// use Illuminate\Routing\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/detail', 'DetailController@index')->name('Detail');
Route::get('/checkout', 'CheckoutController@index')->name('Checkout');
Route::get('/checkout/success', 'CheckoutController@success')->name('Checkout-Success');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');
    });
