<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserApplyController;

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

Route::middleware(['auth', 'user-role:user'])->group(function () {
	Route::get("/home", [HomeController::class, 'userHome'])->name("home");
});

Route::middleware(['auth', 'user-role:editor'])->group(function () {
	Route::get("/editor/home", [HomeController::class, 'editorHome'])->name("editor.home");
});

Route::middleware(['auth', 'user-role:admin'])->group(function () {
	Route::get("/admin/home", [HomeController::class, 'adminHome'])->name("admin.home");
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact_us', function () {
	return view('contact_us');
});

Route::post('/Contact/insert', [ContactController::class, 'insert']);

//student application
Route::get('user_apply', [UserApplyController::class, 'index']);
Route::post('store_user_apply', [UerApplyController::class, 'store']);

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

//Route::get('/faqdata/{id}/deleteAdmission','App\Http\Controllers\FAQcontroller@delete2');
