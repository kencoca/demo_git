<?php

use App\Http\Controllers\PageController;
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

Route::get('acvbb', function () {
    return view('about');
})->name("about");

Route::get("hello/{name?}",function($name = "Tí"){
    return "Hello ".$name;
});

Route::get("hello/{name}/phone/{number}",function($name, $number){
    return "Hello ".$name. " Phone: ".$number;
});


Route::match(['get','post'],'hi',function(){
    return "Hi Tèo";
});

Route::get("demo",'PageController@index');