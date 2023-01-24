<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\StaffController;

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

Route::get('/', [BannerController::class, 'showBanner']);

Auth::routes();

Route::middleware(['auth', 'user-role:student'])->group(function () {
	Route::get("/student", [HomeController::class, 'studentHome'])->name("student.home");
});

Route::middleware(['auth', 'user-role:staff', 'checkheader'])->group(function () {
	Route::get("/staff", [HomeController::class, 'staffHome'])->name("staff.home");
	Route::get('/staff/banner_list', [StaffController::class, 'readBanner'])->name("staff.banner_list");
	Route::post('/staff/banner_list/upload', [StaffController::class, 'uploadBanner']);
	Route::get('/staff/banner_list/{id}/delete', [StaffController::class, 'deleteBanner']);
	Route::post('/staff/banner_list/{id}/modify', [StaffController::class, 'modifyBanner']);
	Route::get('/staff/banner_list/{id}/banner', [StaffController::class, 'Banner']);
});

Route::middleware(['auth', 'user-role:admin', 'checkheader'])->group(function () {
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
Route::middleware(['auth', 'user-role:student','checkheader'])->group(function () {
	Route::get('/contact_us','App\Http\Controllers\ContactController@contactindex');
	Route::post('/Contact/insert','App\Http\Controllers\ContactController@insert');
});

Route::middleware(['auth', 'user-role:admin', 'checkheader'])->group(function(){
    Route::get('/contactStaff','App\Http\Controllers\ContactController@contactStaffindex');
	Route::get('/contactStaff/{id}/edit','App\Http\Controllers\ContactController@edit');
	Route::post('/contactStaff/{id}/update','App\Http\Controllers\ContactController@update');
    Route::get('/contactStaff/{id}/delete','App\Http\Controllers\ContactController@delete');
});


//student application
	Route::get('/application', 'App\Http\Controllers\ApplicationController@create');
	Route::get('/application/edit', 'App\Http\Controllers\ApplicationController@edit');
	Route::post('/application/update', 'App\Http\Controllers\ApplicationController@update');
	Route::get('/application/delete', 'App\Http\Controllers\ApplicationController@delete');


Route::middleware(['auth', 'user-role:staff', 'checkheader'])->group(function(){
    Route::get('/index_application', [StaffController::class, 'readApplication'])->name("index_application");
});


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

//Course Student
Route::middleware(['auth', 'user-role:student', 'checkheader'])->group(function(){
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
});

//Course Staff
Route::middleware(['auth', 'user-role:staff', 'checkheader'])->group(function(){
Route::get('/staffAdd', function () {
	return view('staffAddinfo');
});

Route::get('/addCourse', function () {
	return view('staffAddinfo');
});

Route::get('/editCourse', function () {
	return view('editCourse');
});

Route::get('/deleteCourse', function () {
	return view('deleteCourse');
});
});


