<?php


/*
=================================================
Module Name     :   InstituteManagementSystem
Module Version  :   v1
Compatible CMS  :   v1.2
Site            :   http://www.doptor.com
Description     :   Manage your Institute online
===================================================
*/

Route::group(array('prefix' => 'backend/modules/institute_management_system', 'middleware' => array('auth', 'auth.backend', 'auth.permissions', 'auth.pw_6_months')), function () {

    Route::get('/', [
        'as' => 'backend.modules.doptorltd.institute_management_system',
        'uses' => 'Modules\DoptorLtd\InstituteManagementSystem\Controllers\StudentController@getIndex'
    ]);
      

});

Route::group(array('prefix' => 'modules/institute_management_system', 'middleware' => array('auth', 'auth', 'auth.permissions', 'auth.pw_6_months')), function () {

    
});
