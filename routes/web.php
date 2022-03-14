<?php

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

// Static Pages
Route::get('/',
'App\Http\Controllers\StaticPagesController@home');
Route::get('/menu',
'App\Http\Controllers\StaticPagesController@menu');
Route::get('/menu/{slug}',
'App\Http\Controllers\StaticPagesController@singleMenu');
Route::get('/about',
'App\Http\Controllers\StaticPagesController@about');
Route::get('/waitlist',
'App\Http\Controllers\StaticPagesController@waitlist');
Route::get('/contact',
'App\Http\Controllers\StaticPagesController@contact');
Route::get('/offers',
'App\Http\Controllers\StaticPagesController@offers');

// Admin Dashboard
Route::get('/admin',
'App\Http\Controllers\admin\AdminController@dashboard');


// Admin Food Categories
Route::get('/admin/food-categories',
'App\Http\Controllers\admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create',
'App\Http\Controllers\admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}/edit',
'App\Http\Controllers\admin\FoodCategoriesController@edit');

// Admin Food Items
Route::get('/admin/food-items',
'App\Http\Controllers\admin\FoodItemsController@index');
Route::get('/admin/food-items/create',
'App\Http\Controllers\admin\FoodItemsController@create');
Route::get('/admin/food-items/{id}/edit',
'App\Http\Controllers\admin\FoodItemsController@edit');

// Admin Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});


