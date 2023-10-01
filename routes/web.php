<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\AppointmentController@index')
    ->name('index');

Route::get('/appointment', function () {
    return view('appointment');
});

Route::post('/appointment-form', 'App\Http\Controllers\AppointmentController@submit')
    ->name('appointment-form');




/*Administrator panel*/
Route::get('/admin/appointment', 'App\Http\Controllers\AppointmentController@getAll')
    ->name('admin-all-appointment');

Route::get('/admin/appointment/edit/{id}', 'App\Http\Controllers\AppointmentController@edit')
    ->name('admin-edit-appointment');

Route::post('/admin/appointment/edit/{id}/update', 'App\Http\Controllers\AppointmentController@update')
    ->name('admin-update-appointment');

Route::get('/admin/appointment/edit/{id}/remove', 'App\Http\Controllers\AppointmentController@remove')
    ->name('admin-remove-appointment');





Route::get('/admin/salons', 'App\Http\Controllers\SalonsController@getAll')
    ->name('admin-all-salons');

Route::get('/admin/salons/add-form', 'App\Http\Controllers\SalonsController@addForm')
    ->name('admin-add-form-salons');

Route::post('/admin/salons/add', 'App\Http\Controllers\SalonsController@add')
    ->name('admin-add-salons');

Route::get('/admin/salons/edit/{id}', 'App\Http\Controllers\SalonsController@edit')
    ->name('admin-edit-salons');

Route::post('/admin/salons/edit/{id}/update', 'App\Http\Controllers\SalonsController@update')
    ->name('admin-update-salons');

Route::get('/admin/salons/edit/{id}/remove', 'App\Http\Controllers\SalonsController@remove')
    ->name('admin-remove-salons');





Route::get('/admin/services', 'App\Http\Controllers\ServicesController@getAll')
    ->name('admin-all-services');

Route::get('/admin/services/add-form', 'App\Http\Controllers\ServicesController@addForm')
    ->name('admin-add-form-services');;

Route::post('/admin/services/add', 'App\Http\Controllers\ServicesController@add')
    ->name('admin-add-services');

Route::get('/admin/services/edit/{id}', 'App\Http\Controllers\ServicesController@edit')
    ->name('admin-edit-services');

Route::post('/admin/services/edit/{id}/update', 'App\Http\Controllers\ServicesController@update')
    ->name('admin-update-services');

Route::get('/admin/services/edit/{id}/remove', 'App\Http\Controllers\ServicesController@remove')
    ->name('admin-remove-services');
