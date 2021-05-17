<?php

use Composer\Util\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

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
Route:: get('/collectiontest', 'Frontend\FrontendController@collectiontest');

Route::as('front.')->group(function () {


    Route::get('/', 'Frontend\FrontendController@index')->name('main');
    Route::get('/fleet', 'Frontend\FrontendController@fleet')->name('fleet');
    Route::get('/booking', 'Frontend\FrontendController@booking')->name('booking');
    Route::get('/branches', 'Frontend\FrontendController@branches')->name('branches');
    Route::get('/media_center', 'Frontend\FrontendController@MediaCenter')->name('media_center');
    Route::get('/car_sales', 'Frontend\FrontendController@CarSales')->name('car_sales');

    Route::as('car.')->group(function () {
        Route::get('car/{car}', 'Frontend\CarsController@show')->name('show');
    });
    Route::as('booking.')->group(function () {
        Route::get('/booking/payment', 'Frontend\BookingController@payment')->name('payment');
    });


    Route::get('/services', 'Frontend\FrontendController@services')->name('services');
    Route::get('/news-details/{news}', 'Frontend\FrontendController@NewsDetails')->name('news-details');
    Route::get('/points_program', 'Frontend\FrontendController@PointsProgram')->name('points_program');
    Route::get('/membership_cards', 'Frontend\FrontendController@MembershipCards')->name('membership_cards');
    Route::get('/recruitment', 'Frontend\FrontendController@recruitment')->name('recruitment');
    Route::get('/candidates', 'Frontend\FrontendController@getCandidates')->name('getCandidates');
    Route::post('/candidates', 'Frontend\FrontendController@addCandidates')->name('addCandidates');
    Route::get('/favorite', 'Frontend\FrontendController@favorite')->name('favorite');
    Route::get('/contactus', 'Frontend\FrontendController@contactus')->name('contactus');
    Route::get('/employment', 'Frontend\FrontendController@employment')->name('employment');
    Route::get('/bookingmodel', 'Frontend\FrontendController@bookingModal')->name('bookingModel');
    Route::get('/profile', 'Frontend\FrontendController@profile')->name('profile');

    Route::post('/custermRequest', 'Frontend\CustmerRequestController@createCustmerRequest')->name('custermRequest');

    Route::post('/changePassword', 'Frontend\CustmerRequestController@changePassword')->name('changePassword');
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
    Route::get('/SitemapGenerator', function(){
        SitemapGenerator::create(config('app.url'))
        ->writeToFile(public_path('sitemap.xml'));
    })->name('aboutus');
    Route::get('/contracts', 'Frontend\ContractController@getContracts')->name('contracts');

    Route::post('/car-sales-request', 'Frontend\PurchaseController@create')->name('purchaserequests.car-sales-request');

    // Route::get('/register', function(){
    //     return view('frontend.register');
    // })->name('register.index');
});



