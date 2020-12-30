<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroll;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\courseController;


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
    return redirect('/login');
});

Route::get('/logout', [Admincontroll::class, 'logout']);
Route::get('/login',[Admincontroll::class, 'adminLogin']);
Route::post('/islogged',[Admincontroll::class, 'adminloged']);

// registeration
Route::get('/dashbord', [Admincontroll::class, 'dashbord']);
Route::get('/studentregisterform', [studentcontroller::class, 'create']);
Route::post('/studentstore', [studentcontroller::class, 'store']);
Route::get('/studentdetails', [studentcontroller::class, 'show']);
Route::get('/delete/{id}', [studentcontroller::class, 'destroy']);
Route::get('/edit/{id}', [studentcontroller::class, 'updateShow']);
Route::post('/edit/{id}', [studentcontroller::class, 'update']);
//course
Route::get('/addcourse', [courseController::class, 'create']);
Route::post('/coursestore', [courseController::class, 'store']);
Route::post('student/courses', [studentcontroller::class, 'course']);
Route::get('/courseshow', [courseController::class, 'show']);
Route::get('deleteCourse/{id}', [courseController::class, 'destroy']);