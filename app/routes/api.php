<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Business;
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
Route::get('get-businesses', function() {
    return Business::all();
});*/

Route::get('get-businesses', 'BusinessController@index');

/* 
Route::get('get-business/{id}', function($id) {
    return Business::find($id);
});

Route::post('store-business', function(Request $request) {
    return Business::create($request->all);
});

Route::put('update-business/{id}', function(Request $request, $id) {
    $business = Busniess::findOrFail($id);
    $busniess->update($request->all());

    return $busniess;
});

Route::delete('delete-business/{id}', function($id) {
    Busniess::find($id)->delete();

    return 204;
});*/

Route::get('get-business/{id}', 'BusinessController@show');
Route::post('store-business', 'BusinessController@store');
Route::put('update-business/{id}', 'BusinessController@update');
Route::delete('delete-business/{id}', 'BusinessController@delete');