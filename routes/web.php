<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;

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

Route::middleware(['auth', 'user-role:student'])->group(function () {
	Route::get("/student", [HomeController::class, 'studentHome'])->name("student.home");
});

Route::middleware(['auth', 'user-role:staff'])->group(function () {
	Route::get("/staff", [HomeController::class, 'staffHome'])->name("staff.home");
});

Route::middleware(['auth', 'user-role:admin', 'checkIPAdd'])->group(function () {
	Route::get("/admin", [HomeController::class, 'adminHome'])->name("admin.home");
	Route::get('/admin/staff_list', [AdminController::class, 'readStaff'])->name("admin.staff_list");
	Route::get('/admin/staff_list/{id}/profile', [AdminController::class, 'readProfile']);
	Route::post('/admin/staff_list/{id}/update', [AdminController::class, 'updateStaff']);
	Route::post('/admin/staff_list/create', [AdminController::class, 'createStaff']);
	Route::get('/admin/staff_list/{id}/delete', [AdminController::class, 'deleteStaff']);
	Route::get('/admin/staff_list/{id}/reset_form', [AdminController::class, 'readPassword']);
	Route::post('/admin/staff_list/{id}/reset_password', [AdminController::class, 'resetPassword']);
});

//ContactUs
Route::get('/contact_us', function () {
	return view('contact_us');
});

Route::post('/Contact/insert', [ContactController::class, 'insert']);

//student application
Route::resource('applications', ApplicationController::class);


//FAQ
Route::middleware(['auth', 'user-role:admin', 'checkIPAdd'])->group(function(){
    Route::get('/faqdata','App\Http\Controllers\FAQcontroller@FAQindex');
    Route::post('/faqdata/createProgramme','App\Http\Controllers\FAQcontroller@create1');
    Route::post('/faqdata/createAdmission','App\Http\Controllers\FAQcontroller@create2');
    Route::get('/faqdata/{id}/editProgramme','App\Http\Controllers\FAQcontroller@edit1');
    Route::get('/faqdata/{id}/editAdmission','App\Http\Controllers\FAQcontroller@edit2');
    Route::post('/faqdata/{id}/updateProgramme','App\Http\Controllers\FAQcontroller@update1');
    Route::post('/faqdata/{id}/updateAdmission','App\Http\Controllers\FAQcontroller@update2');
    Route::get('/faqdata/{id}/deleteProgramme','App\Http\Controllers\FAQcontroller@delete1');
    Route::get('/faqdata/{id}/deleteAdmission','App\Http\Controllers\FAQcontroller@delete2');
});

//Course
Route::get('/diploma', function () {
	return view('diploma');
});

Route::get('/degree', function () {
	return view('degree');
});

Route::get('/diploma_creative_multimedia', function () {
	return view('course1');
});

Route::get('/diploma_finance', function () {
	return view('course2');
});

Route::get('/diploma_accounting', function () {
	return view('course3');
});

Route::get('/diploma_InfoTech', function () {
	return view('course4');
});

Route::get('/degree_financialEng', function () {
	return view('degree1');
});

Route::get('/degree_EngElectronics', function () {
	return view('degree2');
});

Route::get('/degree_ScienceComp', function () {
	return view('degree3');
});

Route::get('/degree_InfoTech', function () {
	return view('degree4');
});


