<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
     protected $fillable=['titulo','url'];
    //deshabilitamos los timestamps
    public $timestamps=false;
}
