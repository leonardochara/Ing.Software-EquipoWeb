<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;/*no se si esto esta bien*/
use App\Http\Requests\NoteRequest;
class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       /* $notes=Note::all();
        return view('note.index',compact('notes'));*/
     
        $notes=Note::paginate(3);
        return view('note.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoteRequest $request)
    {
        //
        $note = new Note;
        $note->titulo=$request->titulo;
        $note->url=$request->url;
        $note->save();
        return redirect()->route('notes.index')->with('mensaje','El libro fue guardado!');
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
        $note=Note::find($id);
        return view('note.show',compact('note'));
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
        $note=Note::find($id);
        return view('note.edit',compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoteRequest $request, $id)
    {
        //
         $note=Note::find($id);;
        $note->titulo=$request->titulo;
        $note->url=$request->url;
        $note->save();
        return redirect()->route('notes.index')
        ->with('mensaje','¡El libro fue actualizado!');
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
        $note=Note::find($id);
        $note->delete();
        return back()->with('mensaje','¡El libro fue eliminado!');
    }
}
