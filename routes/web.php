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

// use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Routing\Route;
use App\Http\Controllers\Admin\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/detail', 'DetailController@index')->name('Detail');
Route::get('/checkout', 'CheckoutController@index')->name('Checkout');
Route::get('/checkout/success', 'CheckoutController@success')->name('Checkout-Success');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('travel-package', 'TravelPackageController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('transaction', 'TransactionController');
    });

Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');
