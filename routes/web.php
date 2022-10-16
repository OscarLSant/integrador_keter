<?php

use Illuminate\Support\Facades\Route;

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


Route::get('plant', 'App\Http\Controllers\PlantController@index');
Route::get('staff', 'App\Http\Controllers\StaffController@index');
Route::get('user', 'App\Http\Controllers\UserController@index');
Route::get('position', 'App\Http\Controllers\PositionController@index');
Route::get('departament', 'App\Http\Controllers\DepartamentController@index');
Route::get('material', 'App\Http\Controllers\MaterialController@index');
Route::get('color', 'App\Http\Controllers\ColorController@index');
Route::get('treatment', 'App\Http\Controllers\TreatmentController@index');
Route::get('chemical', 'App\Http\Controllers\ChemicalController@index');
Route::get('customer', 'App\Http\Controllers\CustomerController@index');
Route::get('productionorder', 'App\Http\Controllers\ProductionOrderController@index');
