<?php

Route::get('/', function () {
    return view('index');
});
Route::get('/documentacion', function () {
    return view('documentacion');
});

Auth::routes();


Route::prefix('usuario/{user}/')->name('user.')->group(function () {   

	//plant Resources
	Route::prefix('planta/')->name('plant.')->group(function () {

		Route::get('lista/','PlantController@index')->name('index');		
    	Route::get('crear/','PlantController@create')->name('create')->middleware('role:administrador');
		Route::post('store/','PlantController@store')->name('store')->middleware('role:administrador');
		Route::get('{plant}/ver','PlantController@show')->name('show');
		Route::get('{plant}/editar','PlantController@edit')->name('edit')->middleware('role:administrador');
		Route::put('{plant}/update','PlantController@update')->name('update')->middleware('role:administrador');
		Route::delete('{plant}/delete','PlantController@destroy')->name('destroy')->middleware('role:administrador');
		
		
			//net Resources
			Route::prefix('{plant}/red/')->name('net.')->group(function () {
				Route::get('crear/','NetController@create')->name('create');
				Route::post('store/','NetController@store')->name('store');
				Route::get('{net}/ver','NetController@show')->name('show');
				Route::get('{net}/editar','NetController@edit')->name('edit');
				Route::put('{net}/update','NetController@update')->name('update');
				Route::delete('{net}/delete','NetController@destroy')->name('destroy');	


				//report Resources
				Route::prefix('{net}/reporte/')->name('report.')->group(function () {
					Route::get('crear/','ReportController@create')->name('create');
					Route::post('store/','ReportController@store')->name('store');
					Route::get('{report}/ver','ReportController@show')->name('show');
					Route::get('{report}/editar','ReportController@edit')->name('edit');
					Route::put('{report}/update','ReportController@update')->name('update');
					Route::delete('{report}/delete','ReportController@destroy')->name('destroy');		
			
			
				});	
			});	

		});	
		//image Resources
		/********************* image ***********************************************/
		Route::resource('image','\App\Http\Controllers\ImageController');
		Route::post('image/{id}/update','\App\Http\Controllers\ImageController@update');
		Route::get('image/{id}/delete','\App\Http\Controllers\ImageController@destroy');
		Route::get('image/{id}/deleteMsg','\App\Http\Controllers\ImageController@DeleteMsg');
		/********************* image ***********************************************/
	
});

//users Resources
Route::prefix('usuarios/')->name('users.')->middleware('role:administrador')->group(function () {
	Route::get('lista/','UserController@index')->name('index');
	Route::get('crear/','UserController@create')->name('create');
	Route::post('store/','UserController@store')->name('store');
	Route::get('{users}/ver','UserController@show')->name('show');
	Route::get('{users}/editar','UserController@edit')->name('edit');
	Route::put('{users}/update','UserController@update')->name('update');
	Route::delete('{users}/delete','UserController@destroy')->name('destroy');
	Route::get('{users}/red/{net}/ver','UserController@show_net')->name('show_net');
	Route::get('{users}/red/{net}/report/{report}/ver','UserController@show_report')->name('show_report');
});

