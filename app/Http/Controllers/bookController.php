<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookCollection;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = bookCollection::paginate(6);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        /*$request->validate([
            'titre' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'description' => 'required|string',
            'image_data' => 'nullable|image|max:2048',
              // Ajoutez une validation pour l'image si nécessaire
        ]);*/
        $book = new bookCollection;
        $book->titre = $request->input('titre');
        $book->auteur = $request->input('auteur');
        $book->description = $request->input('description');

        if($request->hasfile('image_data'))
        {
            $file = $request->file('image_data');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('books/', $filename);
            $book->image_data = $filename;
        }

        /*$book = bookCollection::create([
            'titre' => $request->input('titre'),
            'auteur' => $request->input('auteur'),
            'description' => $request->input('description'),
            'image_data' => $imageData
        ]);*/
        $book->save();

        return redirect()->back()->with('success', 'Book collection created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $book = bookCollection::find('id', $id);
        return view('books.show', compact('book'));
    }

    public function detail (Request $request)
    {
        $book = bookCollection::where('titre', $request->titre)->first();
        //return dd($book);
        return view('books.detail', compact('book'));
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
