<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table='posts';
    function user(){
       return $this->belongsTo(users::class);
    }
    function comments(){
        return $this->hasMany(Comments::class);
    }
}
