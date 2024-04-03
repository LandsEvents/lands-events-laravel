<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function index()
    {
        $albums = Album::all();

        return view('albums.index', ['albums' => $albums]);
    }

    public function getAll()
    {
        $albums = Album::all();

        return $albums;
    }

    public function getId($id)
    {
        $album = Album::findOrFail($id);

        return $album;
    }
    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
        ]);

        $album = new Album();
        $album->name = $request->get('name');
        $album->location = $request->get('location');
        $album->date = $request->get('date');
        $album->save();

        return redirect()->route('albums.index')->with('success', 'album aangemaakt!');
    }    public function update($id, Request $request)
{
    $request->validate([
        'name' => 'required',
        'location' => 'required',
        'date' => 'required',
    ]);

    $album = Album::findOrFail($id);
    $album->name = $request->get('name');
    $album->location = $request->get('location');
    $album->date = $request->get('date');
    $album->save();

    return redirect()->route('albums.index')->with('success', 'album bewerken');
}



    public function edit($id)
    {
        $album = Album::findOrFail($id);

        return view('albums.edit', ['album' => $album]);
    }

    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();

        return redirect()->route('albums.index')->with('success', 'album verwijderd!');
    }

}
