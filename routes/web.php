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

Route::get('/getCarsCategories', 'Web\SiteController@getCarsCategories');

Route::as('front.')->group(function () {
    Route::get('/', 'Frontend\FrontendController@index')->name('main');
    Route::get('/fleet', 'Frontend\FrontendController@fleet')->name('fleet');
    Route::get('/booking', 'Frontend\FrontendController@booking')->name('booking');
    Route::get('/branches', 'Frontend\FrontendController@branches')->name('branches');
    Route::get('/contactus', 'Frontend\FrontendController@contactus')->name('contactus');
    Route::get('/employment', 'Frontend\FrontendController@employment')->name('employment');
    Route::get('/profile', function(){
        return view('frontend.profile');
    })->name('profile');
    Route::get('/points', function(){
        return view('frontend.points');
    })->name('points');
    // Route::get('/register', function(){
    //     return view('frontend.register');
    // })->name('register.index');
});


