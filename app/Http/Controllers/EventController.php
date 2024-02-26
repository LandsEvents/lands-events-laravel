<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->name = $request->get('name');
        $post->date = $request->get('begin_date');
        $post->date = $request->get('end_date');
        $post->time = $request->get('time');
        $post->description = $request->get('description');
        $post->category = $request->get('category');
        $post->location = $request->get('location');
        $post->price = $request->get('price');
        $post->image = '';
        $post->save();
    }
}
