<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Level;

class hero extends Model
{
    protected $table = 'heroes';

    public function level(){
        return $this->hasOne(level::class, "id", "level_id" );
    }
}
