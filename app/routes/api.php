<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Business;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::get('businesses', function() {
    return Business::all();
});*/

Route::get('get-businesses', 'App\Http\Controllers\TresleController@index')->name('get-businesses');

/* 
Route::get('get-business/{id}', function($id) {
    return Business::find($id)->name('get-business');
});

Route::post('store-business', function(Request $request) {
    return Business::create($request->all);
});

Route::put('update-business/{id}', function(Request $request, $id) {
    $business = Busniess::findOrFail($id);
    $business->update($request->all());

    return $busniess;
});

Route::delete('delete-business/{id}', function($id) {
    Business::find($id)->delete();

    return 204;
});*/

Route::get('get-business/{id}', 'App\Http\Controllers\TresleController@show')->name('get-business');
Route::post('store-business', 'App\Http\Controllers\TresleController@store')->name('store-business');
Route::put('update-business/{id}', 'App\Http\Controllers\TresleController@update')->name('update-business');
Route::delete('delete-business/{id}', 'App\Http\Controllers\TresleController@destroy')->name('delete-business');