<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $query = Comic::orderBy('id');

        if ($search) $query->where('title', 'LIKE', "%$search%");

        $comics = $query->get();

        return view('comics.index', compact('comics', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comic = new Comic;
        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // ! validation
        $request->validate([
            //array key(input name) => what to validate
            "title" => 'required|string',
            'description' => 'nullable|string',
            'thumb' => 'nullable|URL',
            'price' => 'required|decimal:2',
            'series' => 'nullable|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
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

        // redirect to new comic created
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
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // ! validation
        $request->validate([
            //array key(input name) => what to validate
            //? if unique 'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)]
            "title" => 'required|string',
            'description' => 'nullable|string',
            'thumb' => 'nullable|URL',
            'price' => 'required|decimal:2',
            'series' => 'nullable|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ]);

        $data = $request->all();

        $comic->fill($data);
        $comic->save();
        //? fill+save = $comic->update($data)

        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //? Comic::destroy($comic)
        $comic->delete();

        return to_route('comics.index')->with('message', "$comic->title deleted succesfully.");
    }
}
