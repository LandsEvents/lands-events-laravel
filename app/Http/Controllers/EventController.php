<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();

        return view('events.index', ['events' => $events]);
    }
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'begin_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
            'category' => 'required',
            'location' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $event = new Event();
        $event->name = $request->get('name');
        $event->begin_date = $request->get('begin_date');
        $event->end_date = $request->get('end_date');
        $event->description = $request->get('description');
        $event->category = $request->get('category');
        $event->location = $request->get('location');
        $event->price = $request->get('price');
        $event->save();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('events', ['disk' => 'public']);
            $event->image = $path;
        }

        return redirect()->route('events.index')->with('success', 'Event aangemaakt!');
    }    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'begin_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
            'category' => 'required',
            'location' => 'required',
            'price' => 'required',
        ]);

        $event = Event::findOrFail($id);
        $event->name = $request->get('name');
        $event->begin_date = $request->get('begin_date');
        $event->end_date = $request->get('end_date');
        $event->description = $request->get('description');
        $event->category = $request->get('category');
        $event->location = $request->get('location');
        $event->price = $request->get('price');
        $event->image = $request->get('image');
        $event->save();

        return redirect()->route('events.index')->with('success', 'Event bewerken');
    }



    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event verwijderd!');
    }

}
