<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();

        return view('images.index', ['images' => $images]);
    }
    public function getWithId($id) {
        $images = Image::with('images')->find($id)->quotes;
        return "test";
    }

    public function getAll()
    {
        $images = Image::all();

        return $images;
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'image_title' => 'required',
            'description' => 'required',
            'event_id' => 'required',
            'album_id' => 'required',
        ]);

        $image = new Image();
        $image->image_title = $request->get('image_title');
        $image->description = $request->get('description');
        $image->event_id = $request->get('event_id');
        $image->album_id = $request->get('album_id');
        $path = $request->file('image')->store('events', ['disk' => 'public']);
        $image->image = $path;
        $image->save();

        return redirect()->route('images.index')->with('success', 'image aangemaakt!');
    }
    public function update($id, Request $request)
{
    $request->validate([
        'image_title' => 'required',
        'description' => 'required',
        'event_id' => 'required',
        'album_id' => 'required',
    ]);

    $image = Image::findOrFail($id);
    $image->image_title = $request->get('image_title');
    $image->description = $request->get('description');
    $image->event_id = $request->get('event_id');
    $image->album_id = $request->get('album_id');
    if ($request->file('image')) {
        $path = $request->file('image')->store('events', ['disk' => 'public']);
        $image->image = $path;
    }
    $image->save();

    return redirect()->route('images.index')->with('success', 'image bewerken');
}



    public function edit($id)
    {
        $image = Image::findOrFail($id);

        return view('images.edit', ['image' => $image]);
    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();

        return redirect()->route('images.index')->with('success', 'image verwijderd!');
    }

}
