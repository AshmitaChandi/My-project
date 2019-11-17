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

Route::get('/', 'HomeController@index');
Route::namespace('Customer')->prefix('customer')->group (function(){
Route::prefix('about')->group(function(){
	Route::get('/','AboutController@index')->name('customer.about.index');
});

Route::prefix('service')->group(function(){
	Route::get('/','ServiceController@index')->name('customer.service.index');
});

Route::prefix('hotel')->group(function(){
	Route::get('/','HotelController@index')->name('customer.hotel.index');

});

Route::prefix('package')->group(function(){
	Route::get('/','PackageController@index')->name('customer.package.index');
	Route::post('search','PackageController@search')->name('customer.package.search');
});

Route::prefix('blog')->group(function(){
	Route::get('/','BlogController@index')->name('customer.blog.index');
});

Route::prefix('contact')->group(function(){
	Route::get('/','ContactController@index')->name('customer.contact.index');
	Route::post('store','ContactController@store')->name('customer.contact.store');
});

Route::prefix('destination')->group(function(){
	Route::get('/','DestinationController@index')->name('customer.destination.index');
});

Route::prefix('Home')->group(function(){
	Route::get('/','HomeController@index')->name('customer.home.index');
});

Route::prefix('book')->group(function(){
	Route::get('/','BookController@index')->name('customer.book.index');
	Route::post('book','BookController@store')->name('customer.book.store');

});

Route::prefix('reserve')->group(function(){
	Route::get('/','ReserveController@index')->name('customer.reserve.index');
	Route::post('reserve','ReserveController@store')->name('customer.reserve.store');
});

});



Route::namespace('Admin')->prefix('admin')->group (function(){
		Route::get('login','logincontroller@index')->name('admin.login');
		Route::post('login/submit','logincontroller@submit')->name('admin.login.submit');
		Route::get('register','Registercontroller@register')->name('admin.register');
		Route::post('register','Registercontroller@register')->name('admin.register');
		Route::get('forgotpassword','ForgotPasswordcontroller@forgotpassword')->name('admin.forgotpassword');
		Route::post('forgotpassword','ForgotPassworcontroller@forgotpassword')->name('admin.forgotpassword');


	
		Route::middleware('auth')->group(function(){
			Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
			Route::get('logout','DashboardController@logout')->name('admin.logout');

			Route::prefix('category')->group(function(){
				Route::get('/', 'CategoryController@index')->name('admin.category.index');
				Route::get('add', 'CategoryController@add')->name('admin.category.add');
		        Route::post('add/submit', 'CategoryController@addSubmit')->name('admin.category.add.submit');
		        Route::get('delete/{slug}', 'CategoryController@delete')->name('admin.category.delete');
		    });
	        Route::prefix('image')->group(function(){
				Route::get('/', 'ImageController@index')->name('admin.image.index');
				Route::get('add', 'ImageController@add')->name('admin.image.add');
		        Route::post('add/submit', 'ImageController@addSubmit')->name('admin.image.add.submit');
		        Route::get('delete/{slug}', 'ImageController@delete')->name('admin.image.delete');
		    });
	        Route::prefix('hotel')->group(function(){
				Route::get('/', 'HotelController@index')->name('admin.hotel.index');
				Route::get('add', 'HotelController@add')->name('admin.hotel.add');
		        Route::post('add/submit', 'HotelController@addSubmit')->name('admin.hotel.add.submit');
		        Route::get('delete/{slug}', 'HotelController@delete')->name('admin.hotel.delete');
		    });
	        Route::prefix('booking')->group(function(){
				Route::get('/', 'BookingController@index')->name('admin.booking.index');
				Route::get('add', 'BookingController@add')->name('admin.booking.add');
		        Route::post('add/submit', 'BookingController@addSubmit')->name('admin.booking.add.submit');
		        Route::get('delete/{slug}', 'BookingController@delete')->name('admin.booking.delete');
		    });
	        Route::prefix('Reservation')->group(function(){
				Route::get('/', 'ReservationController@index')->name('admin.reservation.index');
		        Route::get('delete/{slug}', 'ReservationController@delete')->name('admin.reservation.delete');
		    });
		    Route::prefix('message')->group(function(){
				Route::get('/', 'MessageController@index')->name('admin.message.index');
		        Route::get('delete/{slug}', 'MessageController@delete')->name('admin.message.delete');
		    });
	        Route::prefix('Package')->group(function(){
				Route::get('/', 'PackageController@index')->name('admin.package.index');
				Route::get('add', 'PackageController@add')->name('admin.package.add');
		        Route::post('add/submit', 'PackageController@addSubmit')->name('admin.package.add.submit');
		        Route::get('delete/{slug}', 'PackageController@delete')->name('admin.package.delete');
	        });
	        Route::prefix('Blog')->group(function(){
				Route::get('/', 'BlogController@index')->name('admin.blog.index');
				Route::get('add', 'BlogController@add')->name('admin.blog.add');
				Route::post('add/submit', 'BlogController@addSubmit')->name('admin.blog.add.submit');
		        Route::get('delete/{slug}', 'BlogController@delete')->name('admin.blog.delete');
		    });
	        Route::prefix('home')->group(function(){
				Route::get('/', 'HomeController@index')->name('admin.home.index');
			});

		});
	});
		


