<?php

Route::group( ['prefix' => 'testpackage'], function (){
    Route::get('/' , 'TestPackage\Controllers\TestController@test');
});
