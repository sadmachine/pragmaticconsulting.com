<?php

/*------------------------------------*\
  # Use Statements 
\*------------------------------------*/

use Illuminate\Support\Facades\Route;
use App\Struct\Link;


/*------------------------------------*\
  # '.com/admin' Routes
\*------------------------------------*/
// Password Reset Routes...
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

Route::view('/login', 'pages.admin.auth.login')->name('admin.login');
Route::view('/register', 'pages.admin.auth.register')->name('admin.register');
Route::post('/register', 'Auth\RegisterController@register')->name('admin.register.submit');
Route::any('/', 'Admin\HomeController@show');
Route::get('/articles', 'Admin\ArticleController@get');
Route::post('/articles', 'Admin\ArticleController@post');
Route::get('/profiles', 'Admin\ProfileController@get');
Route::post('/profiles', 'Admin\ProfileController@post');
Route::get('/clients', 'Admin\ClientController@get');
Route::post('/clients', 'Admin\ClientController@post');
Route::get('/carousels', 'Admin\CarouselController@get');
Route::post('/carousels', 'Admin\CarouselController@post');
Route::post('/update-carousel-items', 'Admin\CarouselItemController@updateItems');