<?php

use App\Http\Controllers\ClothingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::get('/', HomeController::class);
//http://localhost/clothing/clothing/public/clothing
Route::controller(ClothingController::class)->group(function(){
    Route::get("/clothing","all")->name("clothing.all");
    Route::get("/clothing/category/{category}","category")->name("clothing.category");
    Route::get("/clothing/detail/{id}","detail")->name("clothing.detail");
});

Route::get('/users',[ UserController::class,"getAll"]);
Route::post('/users/create',[ UserController::class,"createUser"]);
*/