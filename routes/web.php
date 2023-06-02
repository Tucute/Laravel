<?php

// use App\Http\Controllers\helloController;

use App\Http\Controllers\AddRoomController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\CreateTableController;
use App\Http\Controllers\masterController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SumController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
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

// Route::get('/', function () {
//     return view('Shape');
// });
// Route::get('/abc',[AreaController::class, 'View'] );
// Route::post('/abc', [AreaController::class, 'Area']);

// Route::get('/index',[masterController::class, 'index'] );
// Route::get('/menu',[masterController::class, 'home'] )  -> name('menu') ;

// Route::post('/rom',[AddRoomController::class, 'store'] );

// Route::get('database', function(){
//     Schema::create('loaisanpham', function($table) {
//         $table -> increments ('id');
//         $table -> string ('ten');
//     } );
//     echo "đã thực hiện tạo bảng thành công";
// });

// Route::get('table',[CreateTableController::class, 'table']);
Route::get('/index',[pageController::class, 'getIndex'] );
Route::get('/details/{id}',[pageController::class, 'getDetails'] );
Route::get('/type/{id}',[pageController::class, 'getLoaiSp'] );

Route::get('/admin', [PageController::class, 'getIndexAdmin']);

Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');								
Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);

Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);											
Route::post('/admin-edit', [PageController::class, 'postAdminEdit']);											

Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);													
