<?php

namespace Database\Seeders;
use DB; 

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');//RESETEAR indice autoincrementable de la tabla
        DB::table('levels')->truncate();//borrar los registros en levels
        $xp = 100;
        for($i =0; $i <10; $i++){
            $xp = $xp * 2;
            DB::table('levels')->insert(
                ['xp' => $xp]);    
        }
       
                                    // se debe declarar use DB para que al ejecutar el seed encuentra la Database o tamambien 
                                                    // iniciar la declaracion del table con un "/"  ejemplo: /DB::table('levels')->inser.......;
    }
}
