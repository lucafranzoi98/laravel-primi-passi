<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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



Route::controller(OrderController::class)->group(function () {
   Route::get('/', function(){
      $data = [
         'name' => 'Luca',
         'lastname' => 'Franzoi',
         'age' => 25
      ];
      return view('home', $data);
   });
   Route::get('/about', function(){
      $data = [
         'name' => 'Luca',
         'lastname' => 'Franzoi',
         'age' => 25
      ];
      return view('about', $data);});
   Route::get('/contacts', function(){
      $data = [
         'name' => 'Luca',
         'lastname' => 'Franzoi',
         'age' => 25
      ];
      return view('contacts', $data);});
});