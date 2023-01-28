<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hero;

class level extends Model
{
    protected $table = 'levels';

    public function hero(){
        return $this->hasMany(hero::class);
    }
}
