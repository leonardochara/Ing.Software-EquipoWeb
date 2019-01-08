<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable=['nombre','apellido','nota1','nota2'];
    public $timestamps=false;
}
