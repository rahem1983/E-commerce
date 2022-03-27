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

Route::get('/', function () {
    return view('Front.index');
});

Route::view('training','Front.training');


Route::view('category-list','Front.category-list');
Route::view('category','Front.category');
Route::view('home_detail','Front.home-details');
Route::view('terms-conditions','Front.terms-conditions');
Route::view('privacy-policy','Front.privacy-policy');
Route::view('warranty-and-replacement','Front.warranty-and-replacement');
Route::view('about-us','Front.about-us');
Route::view('order-place','Front.support.order-place');
Route::view('sourcing-product','Front.support.sourcing-product');
Route::view('technical-assistance','Front.support.technical-assistance');
Route::view('faq','Front.faq');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
