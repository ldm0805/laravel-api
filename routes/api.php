<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewPostController as NewPostController;
use App\Http\Controllers\Api\GuestLeadController as GuestLeadController;




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

Route::get('/projects', [NewPostController::class, 'index']);
Route::get('/posts/{slug}', [NewPostController::class, 'show']);
Route::post('/contacts', [GuestLeadController::class, 'store']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
