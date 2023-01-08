<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    use HasFactory;


    //Relationship One to Many (inverse situation)
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');

    }
}
