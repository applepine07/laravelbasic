<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController; 
use App\Http\Controllers\StudentController; 
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/test', [CarController::class, 'test'])->name('cars.test');
Route::post('/cars_get_form', [CarController::class, 'myForm'])->name('cars.myform');


// Route::get('/cars_get_form', [CarController::class, 'myForm'])->name('cars.myform');
Route::resource('cars', CarController::class);

Route::get('/students_updateAll', [StudentController::class, 'updateAll'])->name('students.updateAll');
Route::get('/test', [StudentController::class, 'test']);

Route::get('stduents_export', [StudentController::class, 'export'])->name('students.export');
Route::resource('students', StudentController::class);
Route::resource('phones', PhoneController::class);
Route::resource('loves', LoveController::class);
// index cars.index 
// create cars.create
// store cars.store
// edit cars.edit
// update cars.update
// destory cars.destory
//

Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});
