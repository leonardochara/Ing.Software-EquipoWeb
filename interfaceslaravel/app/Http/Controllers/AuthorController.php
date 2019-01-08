<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Http\Requests\AuthorRequest;

use App\Services\PayUService\Exception;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $authors=Author::paginate(3);
        return view('author.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
        //
        $author=new Author;
        $author->nombres=$request->nombres;
        $author->email=$request->email;
        $author->save();
        return redirect()->route('authors.index')->with('mensaje','El autor fue guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $author=Author::find($id);
        return view('author.show',compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $author=Author::find($id);
        return view('author.edit',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorRequest $request, $id)
    {
        //
        $author=Author::find($id);
        $author->nombres=$request->nombres;
        $author->email=$request->email;
        $author->save();
        return redirect()->route('authors.index')->with('mensaje','¡El autor fue actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
         $author=Author::find($id);
        $author->delete();
        return back()->with('mensaje','¡El autor fue eliminado!');
            }
        catch (\Exception $e) {
            return back()->with('mensajee','error |¡El autor no puede ser eliminada esta siendo usada en otra tabla¡')
          

            ;
        }

    }
}
