<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\RazorpayController;

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

Route::get('/','App\Http\Controllers\FrontendController@index');
Route::get('/contact','App\Http\Controllers\FrontendController@contact_us');
Route::post('/contact','App\Http\Controllers\FrontendController@post_contact_us');
Route::get('/work','App\Http\Controllers\FrontendController@work');
Route::get('/about','App\Http\Controllers\FrontendController@about');
Route::get('/business_register','App\Http\Controllers\FrontendController@business_register');

    

Auth::routes();
Route::group(['middleware' => ['auth', 'disablepreventback']], function () {
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('index');
    Route::resource('/profile','App\Http\Controllers\ProfileController');
    Route::post('updatepassword', 'App\Http\Controllers\ProfileController@updatePassword')->name("updatepassword");
    Route::resource('/labour','App\Http\Controllers\labourController');
    Route::resource('/farmer','App\Http\Controllers\farmerController');
    Route::get('labour_pdf','App\Http\Controllers\labourController@labourPdf')->name('labourPdf');
    Route::get('labourpdf/{id}','App\Http\Controllers\labourController@labourdata')->name('labourdata');
    Route::get('farmer_pdf','App\Http\Controllers\farmerController@farmerPdf')->name('farmerPdf');
    Route::get('farmerpdf/{id}','App\Http\Controllers\farmerController@farmerdata')->name('farmerdata');
    Route::resource('/bussiness','App\Http\Controllers\BussinessController');
    Route::get('sendsms','App\Http\Controllers\labourController@sendSms')->name('sendSms');




});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    
Route::get('paywithrazorpays','App\Http\Controllers\RazorpayPaymentController@payWithRazorpay')->name('payWithRazorpay');
Route::get('payments','App\Http\Controllers\RazorpayPaymentController@payment')->name('payment'); 




Route::get('paywithrazorpay', [RazorpayController::class,'payWithRazorpay'])->name('paywithrazorpay');
Route::post('payment', [RazorpayController::class,'payment'])->name('payment');

// Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
