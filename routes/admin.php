<?php

use Illuminate\Support\Facades\Route;

// Login Routes
Route::group(['namespace' => 'Admin','middleware' => 'guest:admin'],function (){
    Route::get('login','LoginController@getLogin')->name('get.admin.login');
    Route::post('login','LoginController@login')->name('admin.login');
});
Route::get('/',function () {
    return redirect()->route('admin.dashboard');
});
// Admin Routes
Route::group(['namespace' => 'Admin','middleware' => 'auth:admin'],function (){
    // Dashboard Page
    Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');
    Route::get('/homepage','SettingsController@index')->name('homepage');
    Route::post('/homepage', 'SettingsController@update_homepage')->name('homepage.update');
    Route::get('/contact', 'SettingsController@contact')->name('contact');
    Route::post('/contact', 'SettingsController@update_contact')->name('contact.update');
    /* Services Routes */
    Route::get('/services', 'ServicesController@index')->name('services');
    Route::get('/services/add', 'ServicesController@add')->name('services.add');
    Route::post('/services/add', 'ServicesController@store')->name('services.store');
    Route::get('/service/delete/{id}', 'ServicesController@delete')->name('service.delete');

    /* Admin Area */

    // Profile Page
    Route::get('/profile','loginController@profile')->name('admin.profile');
    // Profile Edit Page
    Route::post('/profile','loginController@profileUpdate')->name('admin.profile.update');
    // Logout
    Route::get('/logout', 'loginController@logout')->name('admin.logout');
});
