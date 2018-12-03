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
	//return hash('sha256', '123456');
    return redirect('login');
});

Auth::routes();

Route::post('login', [
  'as' => '',
  'uses' => 'Auth\LoginController@login'
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('checking',function(){
	switch (Auth::user()->role_id) {
		case '1':
			return redirect('admin');
			break;
		case '2':
			return redirect(route('employe.jadwal'));
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
		Route::post('sdm/update/{id}', 'SDMController@update')->name('sdm.update.post');


		//harikerja
		Route::get('harikerja','HariController@index')->name('harikerja.index');
		Route::patch('harikerja','HariController@update')->name('harikerja.update');

		Route::group(['prefix'=>'staff'],function(){
			Route::post('edit','AdminController@edit');
			Route::post('update','AdminController@update')->name('staff.update');
			Route::post('delete','AdminController@delete');
			Route::get('create','AdminController@create');
			Route::post('store','AdminController@store')->name('staff.store');
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
	// Profile
	Route::get('/employe/profile', 'EmployeController@profile')->name('employe.profile');
	Route::get('/employe/profile/edit', 'EmployeController@editProfile')->name('employe.profile.edit');
	Route::post('/employe/profile/update', 'EmployeController@updateProfile')->name('employe.profile.update');

	// Jadwal Kerja
	Route::get('/employe/jadwal', 'EmployeController@jadwal')->name('employe.jadwal');
	Route::get('/employe/jadwal/calendar', 'EmployeController@getCalendar')->name('employe.jadwal.calendar');

});
// Route::get('/create', function() {
// 	return view ('staff/create');
// });



