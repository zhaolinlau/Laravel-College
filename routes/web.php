<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CourseInfosController;

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

Auth::routes();

Route::get('/', [BannerController::class, 'showBanner']);

Route::middleware(['auth', 'user-role:staff', 'checkheader'])->group(function () {
	Route::get('/staff/banner_list', [BannerController::class, 'readBanner'])->name("staff.banner_list");
	Route::post('/staff/banner_list/upload', [BannerController::class, 'uploadBanner']);
	Route::get('/staff/banner_list/{id}/delete', [BannerController::class, 'deleteBanner']);
	Route::post('/staff/banner_list/{id}/modify', [BannerController::class, 'modifyBanner']);
	Route::get('/staff/banner_list/{id}/banner', [BannerController::class, 'Banner']);
});

Route::middleware(['auth', 'user-role:student'])->group(function () {
	Route::get("/student", [HomeController::class, 'studentHome'])->name("student.home");
});

Route::middleware(['auth', 'user-role:staff', 'checkheader'])->group(function () {
	Route::get("/staff", [HomeController::class, 'staffHome'])->name("staff.home");
	Route::get('/staff/{id}/profile', function () {
		return view('staff_myprofile');
	});
	Route::post('/staff/{id}/update', [StaffController::class, 'updateProfile']);
	Route::get('/staff/{id}/change_password', function () {
		return view('staff_changepwd');
	});
	Route::post('/staff/{id}/change_password', [StaffController::class, 'changePassword']);
});

Route::middleware(['auth', 'user-role:admin', 'checkheader'])->group(function () {
	Route::get("/admin", [HomeController::class, 'adminHome'])->name("admin.home");
	Route::get('/admin/staff_list', [AdminController::class, 'readStaff'])->name("admin.staff_list");
	Route::get('/admin/staff_list/{id}/profile', [AdminController::class, 'readProfile']);
	Route::post('/admin/staff_list/{id}/update', [AdminController::class, 'updateStaff']);
	Route::post('/admin/staff_list/create', [AdminController::class, 'createStaff']);
	Route::get('/admin/staff_list/{id}/delete', [AdminController::class, 'deleteStaff']);
	Route::get('/admin/staff_list/{id}/reset_form', [AdminController::class, 'readPassword']);
	Route::post('/admin/staff_list/{id}/reset_password', [AdminController::class, 'resetPassword'])->name('admin.staff_password');
	Route::get('/admin/{id}/change_password', function () {
		return view('admin_changepwd');
	});
	Route::post('/admin/{id}/change_password', [AdminController::class, 'changePassword']);
	Route::get('/admin/{id}/profile', function () {
		return view('admin_myprofile');
	});
	Route::post('/admin/{id}/update', [AdminController::class, 'updateProfile']);
});

Route::get('/about_us', function () {
	return view('about_us');
});

//ContactUs
Route::middleware(['checkIPAdd:127.0.0.1', 'checkheader'])->group(function () {
	Route::get('/contact_us', 'App\Http\Controllers\ContactController@contactindex');
	Route::post('/contact_us/insert', 'App\Http\Controllers\ContactController@insert');
});
Route::middleware(['auth', 'user-role:staff', 'checkheader'])->group(function () {
	Route::get('/contactStaff', 'App\Http\Controllers\ContactController@contactStaffindex');
	Route::get('/contactStaff/{id}/edit', 'App\Http\Controllers\ContactController@edit');
	Route::post('/contactStaff/{id}/update', 'App\Http\Controllers\ContactController@update');
	Route::get('/contactStaff/{id}/delete', 'App\Http\Controllers\ContactController@delete');
});


//student application
Route::get('/application', 'App\Http\Controllers\ApplicationController@create');
Route::post('/application/store', 'App\Http\Controllers\ApplicationController@store');
Route::get('/application/show', 'App\Http\Controllers\ApplicationController@show')->name("show_application");
Route::get('/application/{id}/edit', 'App\Http\Controllers\ApplicationController@edit');
Route::post('/application/{id}/update', 'App\Http\Controllers\ApplicationController@update');
Route::get('/application/{id}/destroy', 'App\Http\Controllers\ApplicationController@destroy');


Route::middleware(['auth', 'user-role:staff', 'checkheader'])->group(function () {
	Route::get('/index_application', [StaffController::class, 'readApplication'])->name("index_application");
});


//FAQ
Route::middleware(['auth', 'user-role:staff', 'checkIPAdd:127.0.0.1', 'checkheader'])->group(function () {
	Route::get('/faqstaff', 'App\Http\Controllers\FAQcontroller@FAQindex');
	Route::post('/faqstaff/createProgramme', 'App\Http\Controllers\FAQcontroller@create1');
	Route::post('/faqstaff/createAdmission', 'App\Http\Controllers\FAQcontroller@create2');
	Route::get('/faqstaff/{id}/editProgramme', 'App\Http\Controllers\FAQcontroller@edit1');
	Route::get('/faqstaff/{id}/editAdmission', 'App\Http\Controllers\FAQcontroller@edit2');
	Route::post('/faqstaff/{id}/updateProgramme', 'App\Http\Controllers\FAQcontroller@update1');
	Route::post('/faqstaff/{id}/updateAdmission', 'App\Http\Controllers\FAQcontroller@update2');
	Route::get('/faqstaff/{id}/deleteProgramme', 'App\Http\Controllers\FAQcontroller@delete1');
	Route::get('/faqstaff/{id}/deleteAdmission', 'App\Http\Controllers\FAQcontroller@delete2');
});

Route::middleware(['checkIPAdd:127.0.0.1', 'checkheader'])->group(function () {
	Route::get('/faqstudent', 'App\Http\Controllers\FAQcontroller@FAQindexview');
	Route::get('/faqstudent/{id}/viewProgramme', 'App\Http\Controllers\FAQcontroller@view1');
	Route::get('/faqstudent/{id}/viewAdmission', 'App\Http\Controllers\FAQcontroller@view2');
});


//Course Student
Route::middleware(['auth', 'user-role:student', 'checkheader'])->group(function () {
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
Route::middleware(['auth', 'user-role:staff', 'checkheader'])->group(function () {
	Route::get('/staffAddinfo', 'App\Http\Controllers\CourseInfosController@Courseindex');
	Route::get('/staffAddinfo/{id}/edit', 'App\Http\Controllers\CourseInfosController@edit');
	Route::post('/staffAddinfo/{id}/update', 'App\Http\Controllers\CourseInfosController@update');
	Route::get('/staffAddinfo/{id}/delete', 'App\Http\Controllers\CourseInfosController@delete');
	Route::post('/staffAddinfo/insert', 'App\Http\Controllers\CourseInfosController@insert');
});

