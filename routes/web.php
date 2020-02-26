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
Auth::routes();

//for product


Route::get('/productView', 'ProductController@index');
Route::get('/product/{id?}', 'ProductController@addProduct');
Route::post('/product/upsert', 'ProductController@productUpsert');
Route::post('/deleteProduct', 'ProductController@deleteProduct');

   

//for category
Route::get('/categoryView', 'CategoryController@index');
Route::get('/category/{id?}', 'CategoryController@addCategory');
Route::post('/category/upsert', 'CategoryController@categoryUpsert');
Route::post('/deleteCategrory', 'CategoryController@deleteCategrory');

//for payment Mode
Route::get('/paymentView', 'PaymentModeController@index');
Route::get('/payment/{id?}', 'PaymentModeController@addPayment');
Route::post('/payment/upsert', 'PaymentModeController@cpaymentUpsert');
Route::post('/deletePayment', 'PaymentModeController@deletePayment');

//for services Mode
Route::get('/servicesView', 'ServicesOfferedController@index');
Route::get('/services/{id?}', 'ServicesOfferedController@addServices');
Route::post('/services/upsert', 'ServicesOfferedController@servicesUpsert');
Route::post('/deleteServices', 'ServicesOfferedController@deleteServices');

//for state 
Route::get('/servicesstateView', 'ServicesOfferedController@index');
Route::get('/services/{id?}', 'ServicesOfferedController@addServices');
Route::post('/services/upsert', 'ServicesOfferedController@servicesUpsert');
Route::post('/deleteServices', 'ServicesOfferedController@deleteServices');


//for product Like
Route::post('/likeProduct', 'ProductlikeController@update');


