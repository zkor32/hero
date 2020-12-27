<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\EnemyController;   

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class,'index']);
Route::get('/admin/heroes', [HeroController::class,'index']) -> name('admin.heroes');
Route::get('/admin/enemies', [EnemyController::class,'index'])-> name('admin.enemies');
Route::get('/admin/items', [ItemController::class,'index'])-> name('admin.items');



