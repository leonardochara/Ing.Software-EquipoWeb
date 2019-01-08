<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //Camps Obligatorios
    protected $fillable=['nombre','telefono'];
    //deshabilitamos los timestamps
    public $timestamps=false;
}
