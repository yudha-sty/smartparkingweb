<?php

use Illuminate\Support\Facades\Route;

Route::get('/',['uses'=>'FrontendController@welcome','as'=>'frontend.index']);

//disable halaman register [pendaftaran]
Auth::routes(['register' => false]);

Route::group (['prefix'=>'admin','middleware'=>['disablepreventback','web', 'auth']],function() {   
    Route::get('/',['uses'=>'DashboardController@index','as'=>'dashboard.index']);

    //monintoring
    Route::get('/monitoring', ['uses'=>'MonitoringController@index','as'=>'monitoring.index']);
});