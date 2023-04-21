<?php

// use App\Http\Controllers\helloController;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\SumController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index',[PageControler::class,'getItem']) ;

// // Route::get('/index', function(){
// //     return "Chào mừng các bạn đến với PNV";
// // });
// Route::get('/abc', [helloController::class,'xinchao']);

// Route::get('/', function () {
//     return view('form');
// });
// Route::post('/',[SumController::class,'Sum']);

Route::get('/', function () {
    return view('Shape');
});
Route::post('/', [AreaController::class, 'Area']);