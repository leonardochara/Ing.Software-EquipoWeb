<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookstore extends Model
{
    //
    protected $fillable=['razon_social','direccion','url'];
    //deshabilitamos tumestamps
    public $timestamps=false;
}
