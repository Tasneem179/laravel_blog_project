<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table='comments';
    function user(){
        return $this->belongsTo(users::class);
    }
    function post(){
        return $this->belongsTo(Posts::class);
    }
}
