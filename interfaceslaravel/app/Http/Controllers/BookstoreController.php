<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookstore;
use App\Http\Requests\BookstoreRequest;
use App\Services\PayUService\Exception;
class BookstoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bookstores=Bookstore::paginate(3);
        return view('bookstore.index',compact('bookstores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bookstore.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookstoreRequest $request)
    {
        //
        $bookstore=new Bookstore;

        $bookstore->razon_social=$request->razon_social;
        $bookstore->direccion=$request->direccion;
        $bookstore->url=$request->url;
        $bookstore->save();
        return redirect()->route('bookstores.index')->with('mensaje','¡La editorial fue guardada!');
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
        $bookstore=Bookstore::find($id);
        return view('bookstore.show',compact('bookstore'));
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
        $bookstore=Bookstore::find($id);
        return view('bookstore.edit',compact('bookstore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookstoreRequest $request, $id)
    {
        //
        $bookstore=Bookstore::find($id);
        $bookstore->razon_social=$request->razon_social;
        $bookstore->direccion=$request->direccion;
        $bookstore->url=$request->url;
        $bookstore->save();
        return redirect()->route('bookstores.index')->with('mensaje','La editorial fue actualizada');
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
        $bookstore=Bookstore::find($id);
        $bookstore->delete();
        return back()->with('mensaje','¡La editorial fue eliminado¡');
            }
        catch (\Exception $e) {
            return back()->with('mensajee','¡La editorial no puede ser eliminada esta siendo usada en otra tabla¡');
        }
    }
}
