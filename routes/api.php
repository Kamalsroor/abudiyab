<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group and "App\Http\Controllers\Api" namespace.
| and "api." route's alias name. Enjoy building your API!
|
*/

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');






Route::post('/register', 'RegisterController@register')->name('sanctum.register');
Route::post('/login', 'LoginController@login')->name('sanctum.login');
Route::post('/login-with-session', 'LoginController@loginWithSession')->name('sanctum.login-with-session');
Route::post('/firebase/login', 'LoginController@firebase')->name('sanctum.login.firebase');

Route::post('/password/forget', 'ResetPasswordController@forget')->name('password.forget');
Route::post('/password/code', 'ResetPasswordController@code')->name('password.code');
Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.reset');
Route::get('/select/users', 'UserController@select')->name('users.select');
Route::post('/customer/forget', 'OldCustomerController@forget')->name('customer.forget');
Route::post('/customer/code', 'OldCustomerController@code')->name('customer.code');
Route::post('/customer/reset', 'OldCustomerController@reset')->name('customer.reset');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('verification/send', 'VerificationController@send')->name('verification.send');
    Route::post('verification/verify', 'VerificationController@verify')->name('verification.verify');
    Route::get('profile', 'ProfileController@show')->name('profile.show');
    Route::match(['put','post', 'patch'], 'profile', 'ProfileController@update')->name('profile.update');
    Route::post('/orders/step1', 'OrderController@step1')->name('orders.step1');
    Route::post('/orders/step2', 'OrderController@step2')->name('orders.step2');
    Route::post('/orders/step3', 'OrderController@step3')->name('orders.step3');
    Route::post('/orders/check', 'OrderController@orderCheck')->name('orders.check');
    Route::apiResource('orders', 'OrderController');
    Route::get('/select/orders', 'OrderController@select')->name('orders.select');
    Route::post('/favorite/{car}', 'CarController@addToFavorite')->name('cars.favorite');
});
Route::post('/editor/upload', 'MediaController@editorUpload')->name('editor.upload');
Route::get('/settings', 'SettingController@index')->name('settings.index');
Route::get('/settings/pages/{page}', 'SettingController@page')
->where('page', 'about|terms|privacy')->name('settings.page');

Route::post('feedback', 'FeedbackController@store')->name('feedback.send');
Route::apiResource('categories', 'CategoryController');
Route::get('/select/categories', 'CategoryController@select')->name('categories.select');
// Route::apiResource('cities', 'CityController');
// Route::get('/select/cities', 'CityController@select')->name('cities.select');
Route::apiResource('roles', 'RoleController');
Route::get('/select/roles', 'RoleController@select')->name('roles.select');

Route::apiResource('branches', 'BranchController');
Route::get('/select/branches', 'BranchController@select')->name('branches.select');
Route::get('/select/branches/website', 'BranchController@selectForWeb')->name('branches.website.select');
Route::get('/select/receiving/branches', 'BranchController@selectByCarId')->name('branches.selectByCarId');
Route::apiResource('categories', 'CategoryController');
Route::get('/select/categories', 'CategoryController@select')->name('categories.select');
Route::get('/cars/recomended', 'CarController@carRelated')->name('cars.related');
Route::apiResource('cars', 'CarController');
Route::get('/filters', 'FilterController@index')->name('cars.filter');
Route::get('/select/cars', 'CarController@select')->name('cars.select');
Route::apiResource('manufactories', 'ManufactoryController');
Route::get('/select/manufactories', 'ManufactoryController@select')->name('manufactories.select');
Route::apiResource('sliders', 'SliderController');
Route::get('/select/sliders', 'SliderController@select')->name('sliders.select');

Route::apiResource('partners', 'PartnerController');
Route::get('/select/partners', 'PartnerController@select')->name('partners.select');

Route::apiResource('offers', 'OfferController');
Route::get('/select/offers', 'OfferController@select')->name('offers.select');

Route::apiResource('works', 'WorkController');
Route::get('/select/works', 'WorkController@select')->name('works.select');
Route::apiResource('custmerrequests', 'CustmerrequestController');
Route::get('/select/custmerrequests', 'CustmerrequestController@select')->name('custmerrequests.select');
Route::apiResource('memberships', 'MembershipController');
Route::get('/select/memberships', 'MembershipController@select')->name('memberships.select');
Route::apiResource('regions', 'RegionController');
Route::get('/select/regions', 'RegionController@select')->name('regions.select');

Route::post('/subscribe', 'SubscribeController')->name('user.subscribe');
Route::apiResource('carsales', 'CarsaleController');
Route::get('/select/carsales', 'CarsaleController@select')->name('carsales.select');
Route::apiResource('mediacenters', 'MediacenterController');
Route::get('/select/mediacenters', 'MediacenterController@select')->name('mediacenters.select');
Route::apiResource('purchaserequests', 'PurchaserequestController');
Route::get('/select/purchaserequests', 'PurchaserequestController@select')->name('purchaserequests.select');
Route::apiResource('additions', 'AdditionController');
Route::get('/select/additions', 'AdditionController@select')->name('additions.select');

Route::post('/payment/{order}/{session}', 'PaymentController@pay')->name('payment.pay');

Route::apiResource('area_pricings', 'AreaPricingController');
Route::get('/select/area_pricings', 'AreaPricingController@select')->name('area_pricings.select');
/*  The routes of generated crud will set here: Don't remove this line  */
