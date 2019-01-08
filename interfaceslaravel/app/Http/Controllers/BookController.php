<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests\BookRequest;
use App\Author;
use App\Bookstore;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recuperamos los contactos de la bd
        $books=Book::paginate(5);
        $authors=Author::all();
        $bookstores=Bookstore::all();
        return view('book.index',compact('books','authors','bookstores'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $authors=Author::all();
        $bookstores=Bookstore::all();
        return view('book.create',compact('authors','bookstores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        //
        if($request->hasFile('imagen'))
        {
            $file=$request->file('imagen');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }

        $book=new Book;

        $book->titulo=$request->titulo;
        $book->edicion=$request->edicion;
        $book->tipo=$request->tipo;

        if($request->get('disponible')!=null){
            $book->disponible=1;
        }
        else{
            $book->disponible=0;
        }
        $book->ejemplares=$request->ejemplares;
        $book->imagen=$name;
        $book->publicacion=$request->publicacion;
        $book->author_id=$request->autor;
        $book->bookstore_id=$request->editorial;
        $book->save();

        return redirect()->route('books.index')
        ->with('mensaje','El libro fue guardado!');
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
        $book=Book::find($id);
        $authors=Author::all();
        $bookstores=Bookstore::all();
        return view('book.show',compact('book','authors','bookstores'));
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
        $book=Book::find($id);
        $authors=Author::all();
        $bookstores=Bookstore::all();
        return view('book.edit',compact('book','authors','bookstores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        //
        $book=Book::find($id);
        if($request->hasFile('imagen'))
        {
            $file=$request->file('imagen');
            $name=time().$file->getClientOriginalName();
            $book->imagen=$name;
            $file->move(public_path().'/images/',$name);
        }
        $book->titulo=$request->titulo;
        $book->edicion=$request->edicion;
        $book->tipo=$request->tipo;

        if($request->get('disponible')!=null){
            $book->disponible = 1;
        }
        else{
            $book->disponible = 0;
        }
        $book->ejemplares=$request->ejemplares;
        $book->publicacion=$request->publicacion;
        $book->author_id=$request->autor;

        $book->save();

        return redirect()->route('books.index')
        ->with('mensaje','El libro fue modificado!');
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
        $book=Book::find($id);
        $book->delete();
        return back()->with('mensaje','¡El libro fue eliminado¡');
    }
}
