<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sallecontroller;


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
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/home', function () {
        return view('home');
    });
    Route::resource('salles','sallecontroller');
    Route::resource('machines','machinecontroller');
    Route::resource('charts','ChartController');
    Route::resource('lists','ListController');
    Route::resource('mshow','MController');
    

    
    
    
    

});

