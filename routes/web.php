<?php

use Illuminate\Support\Facades\Route;

  

use App\Http\Controllers\Auth\AuthController;
use App\Jobs\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/password/email' , 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset' , 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset' , 'Auth\ResetPasswordController@reset');
Route::get('/password/reset/{token}' , 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::get('/vehicles/novo', 'VehicleController@create')->name('create_vehicles');
Route::post('/vehicles/novo' , 'VehicleController@store')->name('register_vehicles');
Route::get('/vehicles/ver', 'VehicleController@show')->name('ver_vehicles');
Route::get('/vehicles/editar/{id}', 'VehicleController@edit')->name('editar_vehicles');
Route::post('/vehicles/editar/{id}', 'VehicleController@update')->name('alterar_veiculo');
Route::get('/vehicles/excluir/{id}', 'VehicleController@delete')->name('deletar_vehicles');
Route::post('/vehicles/excluir/{id}', 'VehicleController@destroy')->name('excluir_vehicles');

Route::get('/veiculosmaringa/insert/{id}', 'VeiculosMaringaController@insert')->name('veiculosmaringa.insert');
Route::get('/veiculosmaringa/update/{id}', 'VeiculosMaringaController@update')->name('veiculosmaringa.update');
Route::get('/veiculosmaringa/delete/{id}', 'VeiculosMaringaController@delete')->name('veiculosmaringa.delete');

