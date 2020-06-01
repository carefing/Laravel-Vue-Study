<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('vuebasic', function () {
    return view('vuebasic.overview');
});
Route::get('vuebasic/component', function () {
    return view('vuebasic.component');
});
Route::get('vuebasic/vuerouter', function () {
    return view('vuebasic.vuerouter');
});
Route::get('vuebasic/vuetify', function () {
    return view('vuebasic.vuetify');
});

