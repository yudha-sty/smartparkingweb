<?php

use Illuminate\Support\Facades\Route;

Route::get('/',['uses'=>'FrontendController@welcome','as'=>'frontend.index']);

//disable halaman register [pendaftaran]
Auth::routes(['register' => false]);

Route::group (['prefix'=>'admin','middleware'=>['disablepreventback','web', 'auth']],function() {   
    Route::get('/',['uses'=>'DashboardController@index','as'=>'dashboard.index']);

    //monintoring
    Route::get('/monitoring', ['uses'=>'MonitoringController@index','as'=>'monitoring.index']);

    //Area Parkir
    Route::get('/datamaster/areaparkir', ['uses'=>'AreaparkirController@index','as'=>'areaparkir.index']);
    Route::get('/datamaster/areaparkir/insert', ['uses'=>'AreaparkirController@create','as'=>'areaparkir.create']);
    Route::post('/datamaster/areaparkir', ['uses'=>'AreaparkirController@store','as'=>'areaparkir.store']);
    Route::get('/datamaster/areaparkir/update{id}', ['uses'=>'AreaparkirController@update', 'as'=>'areaparkir.update']);
    Route::post('/datamaster/areaparkir/update_action{id}', ['uses'=>'AreaparkirController@update_action', 'as'=>'areaparkir.update_action']);
    Route::get('/datamaster/areaparkir/delete{id}', ['uses'=>'AreaparkirController@delete', 'as'=>'areaparkir.delete']);

});