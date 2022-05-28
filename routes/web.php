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
Route::get('app',function(){
   return view('site.app');
});
Route::get('table',function(){
   return view('site.table');
});

Route::get('myname', function () {
    return "Wlecome to laeavel mohanda emr";
});

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('3Bounce')->group(function(){
    Route::get('Mahmmoud fq',function(){
       return "Bounce 3";
    });
    Route::get('Mohand Amer',function(){
       return "Bounce 100";
    });
    Route::get('Haythem abo shaoeesh',function(){
       return "Bounce 1";
    });
 });
 
 
 Route::get('num/{num}',function($num){
    return "number id is :".$num ;
 });
 
 
 Route::redirect("Loginfacebook","https://www.facebook.com/mohand.amer.3386");
 
 
 Route::get('login', 'App\Http\Controllers\Controller@login');
 
 
 Route::get('one',function(){
    return 'Mohand Amer!2bounce';
 });