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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/news', function ($id) {
    return "ข่าว";
});
Route::get('/new/{id}', function ($id) {
    return "ข่าวที่ $id";
});
Route::get('/บวกเลข/{num1}/{num2}', function ($sum1,$sum2) {
    return "ผลรวมของเลข $sum1 และ $sum2 คือ".($sum1+$sum2);
});
