<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable=['titulo','edicion','tipo','disponible','ejemplares','imagen','publicacion','author_id','bookstore_id'];
    //deshabilitamos tumestamps
    public $timestamps=false;
}
