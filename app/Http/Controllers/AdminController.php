<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hero;
use App\Models\enemy;
use App\Models\item;

class AdminController extends Controller
{
    public function index(){
        $herocouter = Hero::count();
        $itemcouter = Item::count();
        $enemycouter = Enemy::count();

        $report = [
            ['name' => "Heroes" , 'counter' => $herocouter, 'route' => 'heroes.index', 'class' => 'btn btn-primary'],
            ['name' => "Enemigos" , 'counter' => $enemycouter, 'route' => 'enemies.index','class' => 'btn btn-warning'],
            ['name' => "Items" , 'counter' => $itemcouter, 'route' => 'items.index', 'class' => 'btn btn-danger']

        ];



    return view('admin.index', ['report' => $report]);
         
    }
}
