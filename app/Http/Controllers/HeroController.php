<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{

    public function index(){
        $heroes = Hero::all();

        return view('admin.heroes.index', ['heroes' => $heroes]);
             
        }
    public function create(){
        return view('admin.heroes.create');
    }

    public function store(Request $request){
    return $this->savehero($request, null);
 
    }
    
    public function update(Request $request,$id){
    return $this->savehero($request, $id);
    }
    public function savehero(Request $request,$id){

        if($id){
            $hero = Hero::find($id);
        }else { 
            $hero = new Hero();
            $hero->xp = 0;
            $hero->level_id = 1;

        }

        $hero->name = $request->input('name');
        $hero->hp = $request->input('hp');
        $hero->atq = $request->input('atq');
        $hero->def = $request->input('def');
        $hero->luck = $request->input('luck');
        $hero->coins = $request->input('coins');

        if($request->hasFile('img_path')){
            $file = $request->file('img_path');
            $name = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path() . '/images/heroes', $name );

            $hero->img_path = $name;
        }

      

        $hero-> save();
        return redirect()->route('heroes.index');


    }

    public function edit($id){

        $hero = Hero::find($id);
        
        return view('admin.heroes.edit', ['hero' => $hero]);
    }  
    public function destroy($id){
        $hero = Hero::find($id);

        $filePath = public_path() . '/images/heroes/'. $hero->img_path;
        \File::delete($filePath);
        $hero->delete();
        
        return redirect()->route('heroes.index');

    }  






    
}
