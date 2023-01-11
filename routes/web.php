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
