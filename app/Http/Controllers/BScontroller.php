<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Enemy;
use App\Models\Level;




class BScontroller extends Controller
{
    public function index()
    {
     // dd($this->runManualBattle(73,7));

        
        // dd($hero->level());

         

      
         
        // dd($events);

     
        return view('admin.bs.index', $this->runAutoBattle(73,5) );
    }

    public static function runAutoBattle($heroId, $enemyId){
      $hero = Hero::find($heroId);
      $enemy = Enemy::find($enemyId);

      $events = [];


      while($hero->hp > 0 && $enemy->hp > 0){
        $luck = random_int(0,100);

        if($luck >= $hero->luck){
            $resultado = $enemy->def - $hero->atq;
            if($resultado < 0){
                $enemy->hp -= $resultado * -1;
               
            }

            if ($enemy->hp > 0){
              $ev = [
                "winner" => "Hero",
                "text" => $hero->name . " hizo daño un daño de " . $resultado* -1  . " puntos a " . $enemy->name

              ];
            }else{
            
             $ev=[ "winner" => "Hero",
              "text" => $hero->name . " Derrotó a " . $enemy->name . " y ganó " . $enemy->xp . " puntos de experiencia."
            ];

            $hero->xp = $hero->xp + $enemy->xp;

            if ($hero->xp >= $hero->level->xp ){
              $hero->xp=0;
              $hero->level_id ++;
              $ev=[ "winner" => "Hero",
              "text" => $hero->name . " subió de nivel."
            ];
            }
            $hero->save();
          
            
            }
            
            
        }else{
          $resultado = $hero->def - $enemy->atq; 
          
          if($resultado < 0){
            $hero->hp -= $resultado * -1;
          }
          
          if($hero->hp > 0){

            $ev = [
              "winner" => "Enemy",
              "text" => $enemy->name . " hizo daño un daño de " . $resultado * -1 . " puntos a " . $hero->name

            ];
          }else{
            $ev=[ "winner" => "Enemy",
            "text" => $enemy->name . " Derrotó a " . $hero->name
          ];

          }


        }
        
        array_push($events, $ev);

     }
     return[
      'events' => $events,
      'heroName'=>$hero->name,
      'enemyName'=>$enemy->name,
      'enemyAvatar'=>$enemy->img_path,
      'heroAvatar'=>$hero->img_path];

     }
     public function runManualBattle($heroId,$enemyId){
      $hero = Hero::find($heroId);
      $enemy = Enemy::find($enemyId);
      $luck = random_int(0,100);

      if($luck >= $hero->luck){
          $resultado = $enemy->def - $hero->atq;
          if($resultado < 0){
              $enemy->hp -= $resultado * -1;
             
          }

          if ($enemy->hp > 0){
            return[
              "winner" => "Hero",
              "text" => $hero->name . " hizo daño un daño de " . $resultado* -1  . " puntos a " . $enemy->name

            ];
          }else{
          
           return[ "winner" => "Hero",
            "text" => $hero->name . " Derrotó a " . $enemy->name . " y ganó " . $enemy->xp . " puntos de experiencia."
          ];

          $hero->xp = $hero->xp + $enemy->xp;

          if ($hero->xp >= $hero->level->xp ){
            $hero->xp=0;
            $hero->level_id ++;
            return[ "winner" => "Hero",
            "text" => $hero->name . " subió de nivel."
          ];
          }
          $hero->save();
        
          
          }


      }else{
        $resultado = $hero->def - $enemy->atq; 
        
        if($resultado < 0){
          $hero->hp -= $resultado * -1;
        }
        
        if($hero->hp > 0){

          return[
            "winner" => "Enemy",
            "text" => $enemy->name . " hizo daño un daño de " . $resultado * -1 . " puntos a " . $hero->name

          ];
        }else{
          return[ "winner" => "Enemy",
          "text" => $enemy->name . " Derrotó a " . $hero->name
        ];

        }


      }

    }
}


    
