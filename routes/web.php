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
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('checking',function(){
	switch (Auth::user()->role_id) {
		case '1':
			return redirect('admin');
			break;
		case '2':
			return redirect('employe');
			break;
		default:
			return redirect('logout');
			break;
	}
});
// Route::post("car/store",'CarController@store');

Route::group(['middleware'=>'UserLevel:1'],function(){
	Route::get('/admin','AdminController@index');

	Route::group(['prefix'=>'admin'], function(){
		Route::get('schedule','ScheduleController@index');
		Route::get('schedule/get-calendar','ScheduleController@getCalendar')->name('get-calendar');
		Route::get('staff','StaffController@index')->name('staff');
		Route::get('create','StaffController@create');
		Route::resource('kehadiran','KehadiranController');
		Route::get('rekap','KehadiranController@rekap');
		
		// JOB
		Route::get('job','JobController@index');
		Route::post('store','JobController@store');
		Route::post('delete','JobController@delete');
		Route::post('job/edit','JobController@edit');
		Route::post('update','JobController@update');

		//SDM
		Route::resource('sdm','SDMController');
		Route::get('show','SDMController@show');


		//harikerja
		Route::get('harikerja','HariController@index')->name('harikerja.index');
		Route::patch('harikerja','HariController@update')->name('harikerja.update');

		Route::group(['prefix'=>'staff'],function(){
			Route::post('edit','AdminController@edit');
			Route::post('update','AdminController@update');
			Route::post('delete','AdminController@delete');
			Route::get('create','AdminController@create');
			Route::post('store','AdminController@store');
			Route::get('show','AdminController@show');

		Route::get('edit','StaffController@edit');
		});

		//Penggajian
		Route::get('gaji','GajiController@index')->name('gaji');
		Route::get('gaji/show_generate','GajiController@index')->name('gaji.show_generate');

	});

});

Route::group(['middleware'=>'UserLevel:2'],function(){
	Route::get('/employe','EmployeController@index');


});
// Route::get('/create', function() {
// 	return view ('staff/create');
// });



