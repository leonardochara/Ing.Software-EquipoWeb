<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable=['nombres','email'];
    //deshabilitamos tumestamps
    public $timestamps=false;
}
