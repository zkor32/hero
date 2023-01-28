<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIcontroller;
use App\Http\Controllers\HeroController;



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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Endpoint de testeo
Route::get('/',[APIcontroller::class,'index']);

//Endpoint de heroes
Route::get('heroes',[APIcontroller::class,'getAllHeroes']);
Route::get('heroes/{id}',[APIcontroller::class,'getHeroes']);

//Endpoint de enemies
Route::get('enemies',[APIcontroller::class,'getAllEnemies']);
Route::get('enemies/{id}',[APIcontroller::class,'getEnemies']);

//Endpoint Items
Route::get('items',[APIcontroller::class,'getAllItems']);
Route::get('items/{id}',[APIcontroller::class,'getItems']);

//Endpoint Battle System
Route::get('bs/{heroId}/{enemyId}',[APIcontroller::class,'runManualBS']);


