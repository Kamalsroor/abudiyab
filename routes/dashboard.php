<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "dashboard" middleware group and "App\Http\Controllers\Dashboard" namespace.
| and "dashboard." route's alias name. Enjoy building your dashboard!
|
*/

Route::get('/', 'DashboardController@index')->name('home');

// Select All Routes.
Route::delete('delete', 'DeleteController@destroy')->name('delete.selected');
Route::delete('forceDelete', 'DeleteController@forceDelete')->name('forceDelete.selected');
Route::delete('restore', 'DeleteController@restore')->name('restore.selected');

// Select All Routes.
Route::get('export', 'ExcelController@export')->name('excel.export');
Route::post('import', 'ExcelController@import')->name('excel.import');


// Customers Routes.
Route::get('trashed/customers', 'CustomerController@trashed')->name('customers.trashed');
Route::get('trashed/customers/{trashed_customer}', 'CustomerController@showTrashed')->name('customers.trashed.show');
Route::post('customers/{trashed_customer}/restore', 'CustomerController@restore')->name('customers.restore');
Route::delete('customers/{trashed_customer}/forceDelete', 'CustomerController@forceDelete')->name('customers.forceDelete');
Route::resource('customers', 'CustomerController');

// Supervisors Routes.
Route::get('trashed/supervisors', 'SupervisorController@trashed')->name('supervisors.trashed');
Route::get('trashed/supervisors/{trashed_supervisor}', 'SupervisorController@show')->name('supervisors.trashed.show');
Route::post('supervisors/{trashed_supervisor}/restore', 'SupervisorController@restore')->name('supervisors.restore');
Route::delete('supervisors/{trashed_supervisor}/forceDelete', 'SupervisorController@forceDelete')->name('supervisors.forceDelete');
Route::resource('supervisors', 'SupervisorController');

// Admins Routes.
Route::get('trashed/admins', 'AdminController@trashed')->name('admins.trashed');
Route::get('trashed/admins/{trashed_admin}', 'AdminController@show')->name('admins.trashed.show');
Route::post('admins/{trashed_admin}/restore', 'AdminController@restore')->name('admins.restore');
Route::delete('admins/{trashed_admin}/forceDelete', 'AdminController@forceDelete')->name('admins.forceDelete');
Route::resource('admins', 'AdminController');

// Settings Routes.
Route::get('settings', 'SettingController@index')->name('settings.index');
Route::patch('settings', 'SettingController@update')->name('settings.update');
Route::get('backup/download', 'SettingController@downloadBackup')->name('backup.download');

// Feedback Routes.
Route::patch('feedback/read', 'FeedbackController@read')->name('feedback.read');
Route::patch('feedback/unread', 'FeedbackController@unread')->name('feedback.unread');
Route::resource('feedback', 'FeedbackController')->only('index', 'show', 'destroy');


Route::patch('applications/read', 'WorkCandidatesController@read')->name('applications.read');
Route::patch('applications/unread', 'WorkCandidatesController@unread')->name('applications.unread');
Route::resource('applications', 'WorkCandidatesController')->only('index', 'show', 'destroy');


        Route::get('trashed/categories', 'CategoryController@trashed')->name('categories.trashed');
        Route::get('trashed/categories/{trashed_category}', 'CategoryController@showTrashed')->name('categories.trashed.show');
        Route::post('categories/{trashed_category}/restore', 'CategoryController@restore')->name('categories.restore');
        Route::delete('categories/{trashed_category}/forceDelete', 'CategoryController@forceDelete')->name('categories.forceDelete');
        Route::resource('categories', 'CategoryController');


        Route::get('trashed/roles', 'RoleController@trashed')->name('roles.trashed');
        Route::get('trashed/roles/{trashed_role}', 'RoleController@showTrashed')->name('roles.trashed.show');
        Route::post('roles/{trashed_role}/restore', 'RoleController@restore')->name('roles.restore');
        Route::delete('roles/{trashed_role}/forceDelete', 'RoleController@forceDelete')->name('roles.forceDelete');
        Route::resource('roles', 'RoleController');



        Route::get('trashed/branches', 'BranchController@trashed')->name('branches.trashed');
        Route::get('trashed/branches/{trashed_branch}', 'BranchController@showTrashed')->name('branches.trashed.show');
        Route::post('branches/{trashed_branch}/restore', 'BranchController@restore')->name('branches.restore');
        Route::delete('branches/{trashed_branch}/forceDelete', 'BranchController@forceDelete')->name('branches.forceDelete');
        Route::resource('branches', 'BranchController');

        Route::get('trashed/categories', 'CategoryController@trashed')->name('categories.trashed');
        Route::get('trashed/categories/{trashed_category}', 'CategoryController@showTrashed')->name('categories.trashed.show');
        Route::post('categories/{trashed_category}/restore', 'CategoryController@restore')->name('categories.restore');
        Route::delete('categories/{trashed_category}/forceDelete', 'CategoryController@forceDelete')->name('categories.forceDelete');
        Route::resource('categories', 'CategoryController');

        Route::get('trashed/cars', 'CarController@trashed')->name('cars.trashed');
        Route::get('trashed/cars/{trashed_car}', 'CarController@showTrashed')->name('cars.trashed.show');
        Route::post('cars/{trashed_car}/restore', 'CarController@restore')->name('cars.restore');
        Route::delete('cars/{trashed_car}/forceDelete', 'CarController@forceDelete')->name('cars.forceDelete');
        Route::resource('cars', 'CarController');

        Route::get('trashed/manufactories', 'ManufactoryController@trashed')->name('manufactories.trashed');
        Route::get('trashed/manufactories/{trashed_manufactory}', 'ManufactoryController@showTrashed')->name('manufactories.trashed.show');
        Route::post('manufactories/{trashed_manufactory}/restore', 'ManufactoryController@restore')->name('manufactories.restore');
        Route::delete('manufactories/{trashed_manufactory}/forceDelete', 'ManufactoryController@forceDelete')->name('manufactories.forceDelete');
        Route::resource('manufactories', 'ManufactoryController');

        Route::get('trashed/sliders', 'SliderController@trashed')->name('sliders.trashed');
        Route::get('trashed/sliders/{trashed_slider}', 'SliderController@showTrashed')->name('sliders.trashed.show');
        Route::post('sliders/{trashed_slider}/restore', 'SliderController@restore')->name('sliders.restore');
        Route::delete('sliders/{trashed_slider}/forceDelete', 'SliderController@forceDelete')->name('sliders.forceDelete');
        Route::resource('sliders', 'SliderController');

        Route::get('trashed/orders', 'OrderController@trashed')->name('orders.trashed');
        Route::get('trashed/orders/{trashed_order}', 'OrderController@showTrashed')->name('orders.trashed.show');
        Route::post('orders/{trashed_order}/restore', 'OrderController@restore')->name('orders.restore');
        Route::delete('orders/{trashed_order}/forceDelete', 'OrderController@forceDelete')->name('orders.forceDelete');
        Route::resource('orders', 'OrderController');

        Route::get('trashed/partners', 'PartnerController@trashed')->name('partners.trashed');
        Route::get('trashed/partners/{trashed_partner}', 'PartnerController@showTrashed')->name('partners.trashed.show');
        Route::post('partners/{trashed_partner}/restore', 'PartnerController@restore')->name('partners.restore');
        Route::delete('partners/{trashed_partner}/forceDelete', 'PartnerController@forceDelete')->name('partners.forceDelete');
        Route::resource('partners', 'PartnerController');

        Route::get('trashed/works', 'WorkController@trashed')->name('works.trashed');
        Route::get('trashed/works/{trashed_work}', 'WorkController@showTrashed')->name('works.trashed.show');
        Route::post('works/{trashed_work}/restore', 'WorkController@restore')->name('works.restore');
        Route::delete('works/{trashed_work}/forceDelete', 'WorkController@forceDelete')->name('works.forceDelete');
        Route::resource('works', 'WorkController');
/*  The routes of generated crud will set here: Don't remove this line  */












