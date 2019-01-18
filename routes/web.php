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

Route::get('/', function () {
    return view('welcome');
});
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);
Route::get('/booking', 'BookingController@index');

Route::get('/SuccessPage', 'SuccessPageController@index');

Route::post('/Storebooking', 'SuccessPageController@store');

Route::get('/Enquiries', 'EnquiriesController@getlastenquiry',function(){
    return \Enquiries::with('user')->get();
})->middleware('auth');

Route::get('/Enquiries/getall', 'EnquiriesController@getall');
Route::get('/Enquiries/{id}', 'EnquiriesController@getClient');

Auth::routes();

Route::get('/Enquiries/{id}', 'EnquiriesController@getClient')->name('Enquiries');

Route::delete('/Enquiries/{id}', 'EnquiriesController@delete');
