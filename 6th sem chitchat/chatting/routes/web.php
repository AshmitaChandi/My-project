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
Route::get('/', 'HomeController@index')->name('customer.home');

Route::post('/chat','HomeController@chatPost')->name('customer.chatpost');

Route::namespace('Customer')->prefix('customer')->group (function(){
		Route::get('login','logincontroller@index')->name('customer.login');
		Route::post('login/submit','logincontroller@submit')->name('customer.login.submit');
		Route::get('register','Registercontroller@register')->name('customer.register');
		Route::post('register','Registercontroller@register')->name('customer.register');
		Route::post('store','Registercontroller@store')->name('customer.store');
		Route::get('forgotpassword','ForgotPasswordcontroller@forgotpassword')->name('customer.forgotpassword');
		Route::post('forgotpassword','ForgotPassworcontroller@forgotpassword')->name('customer.forgotpassword');
		Route::get('logout','HomeController@logout')->name('customer.logout');

Route::prefix('message')->group(function(){
	Route::get('/','MessageController@index')->name('customer.message.index');
	Route::post('store','MessageController@store')->name('customer.message.store');
});

// 		Route::prefix('Home')->group(function(){
// 	Route::get('/','HomeController@index')->name('customer.home.index');
// });
});
Route::namespace('Admin')->prefix('admin')->group (function(){
		Route::get('login','logincontroller@index')->name('admin.login');
		Route::post('login/submit','logincontroller@submit')->name('admin.login.submit');
		Route::get('register','Registercontroller@register')->name('admin.register');
		Route::post('register','Registercontroller@register')->name('admin.register');
		Route::post('store','Registercontroller@store')->name('admin.register.store');
		Route::get('forgotpassword','ForgotPasswordcontroller@forgotpassword')->name('admin.forgotpassword');
		Route::post('forgotpassword','ForgotPassworcontroller@forgotpassword')->name('admin.forgotpassword');
		
Route::middleware('auth')->group(function(){
			Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
			Route::get('logout','DashboardController@logout')->name('admin.logout');		
	
Route::prefix('profile')->group(function(){
				Route::get('/', 'ProfileController@index')->name('admin.profile.index');	
	});
Route::prefix('home')->group(function(){
				Route::get('/', 'HomeController@index')->name('admin.home.index');
			});
Route::prefix('message')->group(function(){
				Route::get('/', 'MessageController@index')->name('admin.message.index');
				Route::get('reply', 'MessageController@reply')->name('admin.message.reply');
				Route::post('store', 'MessageController@store')->name('admin.message.store');
		        Route::get('delete/{slug}', 'MessageController@delete')->name('admin.message.delete');
		    });
});
});
