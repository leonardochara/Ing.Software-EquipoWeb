<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function hola()
    {
    	return 'Hola desde elemplo Controller';
    }
    public function vista($nombre)
    {
    	return view('ejemplo',compact('nombre'));}
}
