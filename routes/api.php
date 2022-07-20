<?php

use App\Http\Controllers\API\NotifController;
use App\Http\Controllers\API\UploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// route document upload
Route::apiResource('upload','\App\Http\Controllers\API\UploadController',[
    "only" => ["store", "index", "edit", "destroy", "update"]    
]);

// route project timeline
Route::apiResource('ProjectTimeline','\App\Http\Controllers\API\ProjectTimelineController',[
    "only" => ["index", "store", "edit", "update", "destroy"]    
]);

Route::apiResource('coba','\App\Http\Controllers\API\CobaController',[
    "only"=> ["store"]
]);

Route::apiResource('tes','\App\Http\Controllers\API\TesController',[
    "only"=> ["store"]
]);


Route::post('/notif/getall')->name('notif.getall');
Route::post('/notif/getroles')->name('notif.getroles');
Route::post('/notif/pushnotif')->name('notif.pushnotif');
Route::post('/delete', [NotifController::class, 'delete'])->name('notif.delete');



Route::post('upload/{id}',[UploadController::class,'update'])->name('uploads.update');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
