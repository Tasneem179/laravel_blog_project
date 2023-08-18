<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table='users';
    function posts(){
        return $this->hasMany(Posts::class);
    }
    function comments(){
        return $this->hasMany(Comments::class);
    }
}
