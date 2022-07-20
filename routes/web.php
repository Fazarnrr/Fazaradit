<?php

use App\Exports\TaskExport;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ListController;



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
    return view('dashboard');
});

Route::get('/dashboard',[DashboardController::class,'index'])->name('dasboard');

//route simpan dokumen
Route::get('/document',[DocumentController::class,'index'])->name('document');
Route::post('/simpan-dok',[DocumentController::class,'store'])->name('simpan-dok');

//route simpan priject time line
Route::get('/input',[InputController::class,'index'])->name('input');
Route::post('/simpan-data',[InputController::class,'store'])->name('simpan-data');
Route::get('/index',[IndexController::class,'index'])->name('index');

//task
Route::get('/task',[TaskController::class,'index'])->name('task');
Route::get('/exporttask',[TaskController::class,'export'])->name('exporttask');

//list
Route::get('/list',[ListController::class,'index'])->name('list');



