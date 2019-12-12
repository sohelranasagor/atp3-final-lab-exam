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
    return view('welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/registration', 'RegistrationController@index')->name('reg.index');
Route::post('/registration', 'RegistrationController@store')->name('reg.store');

Route::group(['middleware'=>['sess']], function(){
    // ADMIN
	Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/admin/myprofile', 'AdminController@show')->name('admin.show');
    Route::post('/admin/myprofile', 'AdminController@update')->name('admin.update');
    Route::get('/admin/memberList', 'AdminController@memberList')->name('admin.memberList');
    Route::get('/admin/member/delete/{id}', 'AdminController@delete')->name('admin.deleteMember');
    Route::post('/admin/member/delete/{id}', 'AdminController@destroy')->name('admin.destroyMember');
    Route::get('/admin/addCategory', 'AdminController@addCarCategory')->name('admin.addCarCategory');
    Route::post('/admin/addCategory', 'AdminController@storeCarCategory')->name('admin.storeCarCategory');
    Route::get('/admin/addCars', 'AdminController@addCars')->name('admin.addCars');
    Route::post('/admin/addCars', 'AdminController@storeCars')->name('admin.storeCars');
    Route::get('/admin/carList', 'AdminController@carList')->name('admin.carList');
    Route::get('/member/deleteCar/{id}', 'AdminController@deleteCar')->name('admin.deleteCar');
    Route::post('/member/deleteCar/{id}', 'AdminController@destroyCar')->name('admin.destroyCar');
    Route::get('/member/CarDetails/{id}', 'AdminController@CarDetails')->name('admin.CarDetails');
    Route::get('/member/editCar/{id}', 'AdminController@editCar')->name('admin.editCar');
    Route::post('/member/editCar/{id}', 'AdminController@updateCar')->name('admin.updateCar');

    // Member
	Route::get('/member', 'UserController@index')->name('member.index');
    Route::get('/member/myprofile', 'UserController@show')->name('member.show');
    Route::post('/member/myprofile', 'UserController@update')->name('member.update');
    Route::get('/member/delete', 'UserController@delete')->name('member.delete');
    Route::post('/member/delete', 'UserController@destroy')->name('member.destroy');
    Route::get('/member/carList', 'UserController@carList')->name('member.carList');
});
