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

});
Route::get('contact-us', 'App\Http\Controllers\ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'App\Http\Controllers\ContactUSController@contactSaveData']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
