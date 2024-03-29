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
use App\Http\Controllers\BScontroller;  

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){ //se utiliza para agrupar con un prefijo todas las rutas en este caso el prefijo de la carpeta "admin"
    Route::resource('heroes', HeroController::class);
        
    
  /*  Route::group(['prefix' => 'heroes'], function(){

        

        
        Route::get('/', [HeroController::class,'index']) -> name('admin.heroes');
        Route::get('/create', [HeroController::class,'create']) -> name('admin.heroes.create');
        Route::post('/store', [HeroController::class,'store']) -> name('admin.heroes.store');
        Route::get('/edit/{id}', [HeroController::class,'edit']) -> name('admin.heroes.edit');
        Route::post('/update/{id}', [HeroController::class,'update']) -> name('admin.heroes.update');
        Route::delete('/destroy/{id}', [HeroController::class,'destroy']) -> name('admin.heroes.destroy');
        




    }); */


Route::get('/', [AdminController::class,'index']) -> name('admin.index'); 
Route::get('bs', [BScontroller::class, 'index'])->name('admin.bs');

Route::resource('enemies', EnemyController::class);
Route::resource('items', ItemController::class);

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
