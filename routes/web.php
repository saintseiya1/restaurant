<?php

use App\Models\GeneralSetting;
use App\Models\SocialSetting;
use App\Models\SeoSetting;

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

// Static Pages
Route::get('/',
'App\Http\Controllers\StaticPagesController@home');
Route::get('/menu',
'App\Http\Controllers\StaticPagesController@menu');
Route::get('/menu/{slug}',
'App\Http\Controllers\StaticPagesController@singleMenu');
Route::get('/about',
'App\Http\Controllers\StaticPagesController@home');
Route::get('/reservations',
'App\Http\Controllers\StaticPagesController@reservations');
Route::post('/reservations',
'App\Http\Controllers\StaticPagesController@saveReservation');
Route::get('/reservations/thank-you',
'App\Http\Controllers\StaticPagesController@thankYou');
Route::get('/contact',
'App\Http\Controllers\StaticPagesController@contact');
Route::get('/offers',
'App\Http\Controllers\StaticPagesController@offers');
Route::post('/offers',
'App\Http\Controllers\StaticPagesController@registerMember');
Route::get('/offers/thank-you',
'App\Http\Controllers\StaticPagesController@thankYou');

// Admin Dashboard
Route::get('/admin',
'App\Http\Controllers\admin\AdminController@dashboard');
Route::get('/admin/estimated-revenue-daily',
'App\Http\Controllers\admin\AdminController@dailyRevenueLast30');

// Admin Food Categories
Route::get('/admin/food-categories',
'App\Http\Controllers\admin\FoodCategoriesController@index')->middleware('role:Admin');
Route::get('/admin/food-categories/create',
'App\Http\Controllers\admin\FoodCategoriesController@create')->middleware('role:Admin');
Route::post('/admin/food-categories',
'App\Http\Controllers\admin\FoodCategoriesController@store')->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/edit',
'App\Http\Controllers\admin\FoodCategoriesController@edit')->middleware('role:Admin');
Route::put('/admin/food-categories/{id}',
'App\Http\Controllers\admin\FoodCategoriesController@update')->middleware('role:Admin');
Route::delete('/admin/food-categories/{id}/delete',
'App\Http\Controllers\admin\FoodCategoriesController@delete')->middleware('role:Admin');


// Admin Food Items
Route::get('/admin/food-items',
'App\Http\Controllers\admin\FoodItemsController@index')->middleware('role:Admin');
Route::get('/admin/food-items/create',
'App\Http\Controllers\admin\FoodItemsController@create')->middleware('role:Admin');
Route::post('/admin/food-items',
'App\Http\Controllers\admin\FoodItemsController@store')->middleware('role:Admin');
Route::get('/admin/food-items/{id}/edit',
'App\Http\Controllers\admin\FoodItemsController@edit')->middleware('role:Admin');
Route::put('/admin/food-items/{id}',
'App\Http\Controllers\admin\FoodItemsController@update')->middleware('role:Admin');
Route::delete('/admin/food-items/{id}/delete',
'App\Http\Controllers\admin\FoodItemsController@delete')->middleware('role:Admin');

// Admin Users
Route::get('/admin/users',
'App\Http\Controllers\admin\UsersController@index')->middleware('role:Admin');
Route::get('/admin/users/create',
'App\Http\Controllers\admin\UsersController@create')->middleware('role:Admin');
Route::post('/admin/users',
'App\Http\Controllers\admin\UsersController@store')->middleware('role:Admin');
Route::get('/admin/users/{id}/edit',
'App\Http\Controllers\admin\UsersController@edit')->middleware('role:Admin');
Route::put('/admin/users/{id}',
'App\Http\Controllers\admin\UsersController@update')->middleware('role:Admin');
Route::delete('/admin/users/{id}/delete',
'App\Http\Controllers\admin\UsersController@delete')->middleware('role:Admin');

// Admin Customers
// Admin Members
Route::get('/admin/members',
'App\Http\Controllers\admin\MemberController@index');
Route::delete('/admin/members/{id}/delete',
'App\Http\Controllers\admin\MemberController@delete');

// Admin Reservations
Route::get('/admin/reservations',
'App\Http\Controllers\admin\ReservationController@index');
Route::delete('/admin/reservations/{id}/delete',
'App\Http\Controllers\admin\ReservationController@delete');

// Admin Settings
Route::get('/admin/settings/general',
'App\Http\Controllers\admin\SettingController@general')->middleware('role:Admin');
Route::put('/admin/settings/general',
'App\Http\Controllers\admin\SettingController@saveGeneral')->middleware('role:Admin');
Route::get('/admin/settings/seo',
'App\Http\Controllers\admin\SettingController@seo')->middleware('role:Admin');
Route::put('/admin/settings/seo',
'App\Http\Controllers\admin\SettingController@saveSeo')->middleware('role:Admin');
Route::get('/admin/settings/social',
'App\Http\Controllers\admin\SettingController@social')->middleware('role:Admin');
Route::put('/admin/settings/social',
'App\Http\Controllers\admin\SettingController@saveSocial')->middleware('role:Admin');

// Admin Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});

// Auth::routes();

Route::get('/home',
[App\Http\Controllers\HomeController::class, 'index'])->name('home');

View::composer(['home', 'pages/about', 'pages/contact', 'pages/offers',
'pages/reservations', 'pages/thank-you', 'menu/all-categories', 'menu/single-menu'
],
function ($view) {

    $general_settings = GeneralSetting::find(1);
    $social_settings = SocialSetting::find(1);
    $seo_settings = SeoSetting::find(1);

    $view->with('settings', [
        "general" => $general_settings,
        "social"=> $social_settings,
        "seo" => $seo_settings
    ]);
});
