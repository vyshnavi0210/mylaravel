<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoController;
use App\Http\Controllers\AirlineController;

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

Route::get('/go', [GoController::class,'index']); 

//Route::get('/go', 'GoController@index'); /*Not working*/

/*
Route::get('/go', function () {
    return view('test',['stud'=>'vyshnavi']);
});*/

Route::get('/airline', function() {
    return view('airline');
});


Route::post('/store', [AirlineController::class, 'store']);


Route::get('/insert',[AirlineController::class,'insert']);

