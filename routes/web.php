<?php

use Illuminate\Http\Request;

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

Auth::routes();


Route::get('/', 'HomeController@index');
Route::post('/uploadphotoimage', 'HomeController@uploadImageProfile');


Route::get('/createnews', 'NewsController@formNews');
Route::post('/insertnews', 'NewsController@insertNews');
Route::get('/admin_page', 'NewsController@showAdminPage');
Route::get('/news/{id}/{title}', 'NewsController@showSingleNews');


Route::get('/modifynews/{id}', 'EditNewsController@showNews');
Route::put('/editnews/{id}', 'EditNewsController@editNews');
Route::delete('/deletenews/{id}', 'EditNewsController@deleteNews');


Route::get('/category/{category}', 'PublicController@showCategories');
Route::get('/contatti', 'PublicController@contactForm');
Route::post('/thanks', 'PublicController@contactMail');
Route::post('/locale/{locale}', 'PublicController@setLocale');


Route::post('/insertnewscomment/{id}', 'CommentController@insertNewsComment');
Route::delete('/deletenewscomment/{id}', 'CommentController@deleteNewsComment');


Route::get('/createproduct', 'ProductController@formProduct');
Route::post('/insertproduct', 'ProductController@insertProduct');
Route::get('/products', 'ProductController@showProducts');











// Route::delete('/deleteproduct/{id}', 'ProductController@deleteProduct');

