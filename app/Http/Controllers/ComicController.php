<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // ! validation (just a try)
        $request->validate([
            //array key(input name) => what to validate
            "title" => 'required|string'
        ]);


        // store all the form values in variable
        $data = $request->all();

        //get the price float val
        $data['price'] = floatval($data['price']);

        //count the artists/writers words and return it divided by ',' as the database expect
        $data['artists'] = implode(',', str_word_count($data['artists'], 1, 'àáãç3'));
        $data['writers'] = implode(',', str_word_count($data['writers'], 1, 'àáãç3'));

        //set the date as the database expect
        $data['sale_date'] = date("Y-m-d", strtotime($data['sale_date']));

        // generate a new comic
        $comic = new Comic();

        // fill the new comic with the form values
        $comic->fill($data);

        // save/add on db
        $comic->save();

        // redirect to comics list index
        return to_route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
