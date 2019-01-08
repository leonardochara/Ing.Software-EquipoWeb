<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});



Route::get('/hola', function () {
    return 'Hola Mundo!';
});


Route::get('/hola1/{nombre}', function ($nombre){
    return 'Hola '.$nombre;
});



Route::get('suma/{nro1}/{nro2}', function ($nro1,$nro2){
    return "$nro1+$nro2=".($nro1+$nro2);
});

Route::get('/holaa','EjemploController@hola');

Route::get('/vista/{nombre}','EjemploController@vista');*/
Route::get('/',function(){
	return view('base');
});
Route::resource('contacts','ContactController');
Route::resource('notes','NoteController');
Route::resource('books','BookController');
Route::resource('students','StudentController');
Route::resource('authors','AuthorController');
Route::resource('bookstores','BookstoreController');
Route::resource('admins','AdminController');
Route::get('/main',function(){
	return view('menu');
});
