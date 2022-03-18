<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\LoveController;

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
// Route::get('/test',CarController::class,'test')->name('cars.test');
// Route::post('/test',CarController::class,'test')->name('cars.test');

// 包含了所有action
Route::resource('cars',CarController::class);
Route::resource('students',StudentsController::class);
Route::resource('phones',PhoneController::class);
Route::resource('loves',LoveController::class);
Route::get('/test', [StudentsController::class, 'test']);
// index cars.index
// create cars.create
// store cars.store
// edit cars.edit
// update cars.update
// destroy cars.destroy

Route::get('/students_updateAll',[StudentsController::class,'updateAll'])->name('students.updateAll');
Route::get('students_export', [StudentsController::class, 'export'])->name('students.export');
Route::get('/cars_get_form',[CarController::class,'store'])->name('cars.myform');
// 意即，輸入name後面的路徑就可call CarController中的myForm函式，而不用輸入cars_get_form
// cars.myform和view那邊要一樣
// /cars_get_form是網址，但被我們用name覆寫

// 以下是預設歡迎畫面，和小任務無關
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/', function () {
//     return view('car.index', ['name' => 'James']);
// });
