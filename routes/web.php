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

Route::get('login', 'AuthController@login')->name('login');
// Route::get('/', function () {
//     return view('/login');
// });
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');



//Route untuk user Admin
// Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {

    // Route::get('/users', 'UserController@index');
    // Route::get('/users/create', 'UserController@create');
    // Route::post('/users', 'UserController@store');
    // Route::get('/users/{id}', 'UserController@show');
    // Route::get('/users/{id}/edit', 'UserController@edit');
    // Route::put('/users/{id}', 'UserController@update');
    // Route::delete('/users/{id}', 'UserController@destroy');
    Route::group(['middleware' => ['auth', 'checkRole:admin,penyetuju']], function () {
   Route::get('/vehicle/index', 'VehicleController@index')->name('vehicle');
Route::get('/vehicle/create', 'VehicleController@create');
Route::post('/vehicle/store', 'VehicleController@store');
Route::get('/vehicle/{id}/show', 'VehicleController@show');
Route::get('/vehicle/{id}/edit', 'VehicleController@edit');
Route::post('/vehicle/{id}/update', 'VehicleController@update');
Route::get('/vehicle/{id}/delete', 'VehicleController@destroy');

Route::get('/VehicleBooking/index', 'VehicleBookingController@index')->name('VehicleBooking');
Route::get('/VehicleBooking/create', 'VehicleBookingController@create');
Route::post('/VehicleBooking/store', 'VehicleBookingController@store');
Route::get('/VehicleBooking/{id}/show', 'VehicleBookingController@show');
Route::get('/VehicleBooking/{id}/edit', 'VehicleBookingController@edit');
Route::post('/VehicleBooking/{id}/update', 'VehicleBookingController@update');
Route::get('/VehicleBooking/{id}/delete', 'VehicleBookingController@destroy');

Route::get('/ApprovalLevel/index', 'ApprovalLevelController@index')->name('ApprovalLevel');
Route::get('/ApprovalLevel/create', 'ApprovalLevelController@create');
Route::post('/ApprovalLevel/store', 'ApprovalLevelController@store');
Route::get('/ApprovalLevel/{id}/show', 'ApprovalLevelController@show');
Route::get('/ApprovalLevel/{id}/edit', 'ApprovalLevelController@edit');
Route::post('/ApprovalLevel/{id}/update', 'ApprovalLevelController@update');
Route::get('/ApprovalLevel/{id}/delete', 'ApprovalLevelController@destroy');


Route::get('/ApprovalHistory/index', 'ApprovalHistoryController@index')->name('ApprovalHistory');
Route::get('/ApprovalHistory/create', 'ApprovalHistoryController@create');
Route::post('/ApprovalHistory/store', 'ApprovalHistoryController@store');
Route::get('/ApprovalHistory/{id}/show', 'ApprovalHistoryController@show');
Route::get('/ApprovalHistory/{id}/edit', 'ApprovalHistoryController@edit');
Route::post('/ApprovalHistory/{id}/update', 'ApprovalHistoryController@update');
Route::get('/ApprovalHistory/{id}/delete', 'ApprovalHistoryController@destroy');
Route::get('/ApprovalHistory/export_excel', 'ApprovalHistoryController@export_excel');

Route::get('/ServiceSchedule/index', 'ServiceScheduleController@index')->name('ServiceSchedule');
Route::get('/ServiceSchedule/create', 'ServiceScheduleController@create');
Route::post('/ServiceSchedule/store', 'ServiceScheduleController@store');
Route::get('/ServiceSchedule/{id}/show', 'ServiceScheduleController@show');
Route::get('/ServiceSchedule/{id}/edit', 'ServiceScheduleController@edit');
Route::post('/ServiceSchedule/{id}/update', 'ServiceScheduleController@update');
Route::get('/ServiceSchedule/{id}/delete', 'ServiceScheduleController@destroy');

Route::get('/FuelConsumption/index', 'FuelConsumptionController@index')->name('fuelConsumption');
Route::get('/FuelConsumption/create', 'FuelConsumptionController@create');
Route::post('/FuelConsumption/store', 'FuelConsumptionController@store');
Route::get('/FuelConsumption/{id}/show', 'FuelConsumptionController@show');
Route::get('/FuelConsumption/{id}/edit', 'FuelConsumptionController@edit');
Route::post('/FuelConsumption/{id}/update', 'FuelConsumptionController@update');
Route::get('/FuelConsumption/{id}/delete', 'FuelConsumptionController@destroy');

// });

});

//Route untuk user Admin, Petugas Administrasi Surat, Petugas Administrasi Keuangan dan Siswa
Route::group(['middleware' => ['auth', 'checkRole:admin,PetugasAdministrasiKeuangan,PetugasAdministrasiSurat,Siswa']], function () {
    Route::get('/auths/{id}/gantipassword', 'AuthController@gantipassword');
    Route::post('/auths/{id}/simpanpassword', 'AuthController@simpanpassword');
});


Route::group(['middleware' => ['auth', 'checkRole:admin,PetugasAdministrasiKeuangan,PetugasAdministrasiSurat']], function () {
    Route::get('/', function () {
        return view('/dashboard');
    });

    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/dashboardd', 'DashboardController@indexx');
    

    Route::get('/pengumuman/index', 'PengumumanController@index');
    Route::post('/pengumuman/tambah', 'PengumumanController@tambah');
});