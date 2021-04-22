<?php

use Illuminate\Support\Facades\Auth;
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

Route::middleware('dashboard.locales')->group(function () {
    Auth::routes();
});

Route::impersonate();
Route::get('locale/{locale}', 'LocaleController@update')->name('locale')->where('locale', '(ar|en)');

// Route::get('/', function () {
//     dd(Request()->all());
//     return view('welcome');
// });

Route:: get('/getCarsCategories', 'Web\SiteController@getCarsCategories');

Route::as('front.')->group(function () {
    Route::get('/', 'Frontend\FrontendController@index')->name('main');
    Route::get('/fleet', 'Frontend\FrontendController@fleet')->name('fleet');
    Route::get('/booking', 'Frontend\FrontendController@booking')->name('booking');
    Route::get('/branches', 'Frontend\FrontendController@branches')->name('branches');
    Route::get('/media_center', 'Frontend\FrontendController@MediaCenter')->name('media_center');
    Route::get('/car_sales', 'Frontend\FrontendController@CarSales')->name('car_sales');
    Route::get('/car-details', 'Frontend\FrontendController@CarDetails')->name('car_details');
    Route::get('/services', 'Frontend\FrontendController@services')->name('services');
    Route::get('/points_program', 'Frontend\FrontendController@PointsProgram')->name('points_program');
    Route::get('/membership_cards', 'Frontend\FrontendController@MembershipCards')->name('membership_cards');
    Route::get('/recruitment', 'Frontend\FrontendController@recruitment')->name('recruitment');
    Route::get('/favorite', 'Frontend\FrontendController@favorite')->name('favorite');
    Route::get('/contactus', 'Frontend\FrontendController@contactus')->name('contactus');
    Route::get('/employment', 'Frontend\FrontendController@employment')->name('employment');
    Route:: get('/bookingmodel', 'Frontend\FrontendController@bookingModal')->name('bookingModel');
    Route::get('/profile', function(){
        return view('frontend.profile');
    })->name('profile');
    Route::get('/points', function(){
        return view('frontend.points');
    })->name('points');
    Route::get('/logintest', function(){
        return view('frontend.login');
    })->name('logintest');
    Route::get('/car-interior', function(){
        return view('frontend.car-interior');
    })->name('car-interior');
    Route::get('/aboutus', function(){
        return view('frontend.aboutus');
    })->name('aboutus');
    // Route::get('/register', function(){
    //     return view('frontend.register');
    // })->name('register.index');
});
