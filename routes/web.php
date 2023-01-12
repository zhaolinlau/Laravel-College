<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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
	return view('index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact_us', function () {
	return view('contact_us');
});

Route::post('/Contact/insert', [ContactController::class, 'insert']);

//FAQ
Route::get('/faqdata','App\Http\Controllers\FAQcontroller@FAQindex');
Route::post('/faqdata/createProgramme','App\Http\Controllers\FAQcontroller@create1');
Route::post('/faqdata/createAdmission','App\Http\Controllers\FAQcontroller@create2');
Route::get('/faqdata/{id}/editProgramme','App\Http\Controllers\FAQcontroller@edit1');
Route::get('/faqdata/{id}/editAdmission','App\Http\Controllers\FAQcontroller@edit2');
Route::post('/faqdata/{id}/updateProgramme','App\Http\Controllers\FAQcontroller@update1');
Route::post('/faqdata/{id}/updateAdmission','App\Http\Controllers\FAQcontroller@update2');
Route::get('/faqdata/{id}/deleteProgramme','App\Http\Controllers\FAQcontroller@delete1');
Route::get('/faqdata/{id}/deleteAdmission','App\Http\Controllers\FAQcontroller@delete2');
