<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    protected $ruleValidation =  [
        'title' => 'required|max:40',
        'author' => 'required|max:40',
        'genre' => 'required|max:50',
        'price' => 'required|numeric',
        'description' => 'nullable|',
        'photo' => 'nullable|max:255',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('updated_at', 'desc')->paginate(18);
        // dd($comic);
        $data=[
            'comics'=> $comics
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create', ['title'=>'Add new Comic']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate($this->ruleValidation);
        $data =$request->all();
        $comic = new Comic();
        $comic->fill($data);
        $save= $comic ->save();

        if(!$save){
            dd('non Corretto');

        }
        return redirect()->route('comics.show', $comic->id)
        ->with('status', "Comic $comic->title Saved!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // dd($comic);
        $data = [
            'comic' =>$comic
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view ('comics.edit', ['comic'=>$comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validateData = $request->validate($this->ruleValidation);
        $data = $request->all();
        $updated = $comic->update($data);
        if(!$updated){
            dd('update non riuscito');
        }
        return redirect()->route('comics.show', $comic->id)
        ->with('status', "Comic $comic->title Saved!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()
            ->route('comics.index')
            ->with('status', "Comic $comic->title deleted!");
    }
}
