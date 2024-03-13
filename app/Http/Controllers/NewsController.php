<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $articles = News::all();

        return view('news.index', ['articles' => $articles]);
    }

    public function getAll()
    {
        return News::all();
    }

    public function getId($id)
    {
        return News::findOrFail($id);
    }
    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'news_title' => 'required',
            'body' => 'required',
            'event_id' => 'required',
        ]);

        $article = new News();
        $article->news_title = $request->get('news_title');
        $article->body = $request->get('body');
        $article->event_id = $request->get('event_id');
        $article->timestamps = false;
        $article->save();

        return redirect()->route('news.index')->with('success', 'Article aangemaakt!');

    }    public function update($id, Request $request)
{
    $request->validate([
        'news_title' => 'required',
        'body' => 'required',
        'event_id' => 'required',
    ]);

    $article = News::findOrFail($id);
    $article->news_title = $request->get('news_title');
    $article->body = $request->get('body');
    $article->event_id = $request->get('event_id');
    $article->save();

    return redirect()->route('news.index')->with('success', 'Event bewerken');
}



    public function edit($id)
    {
        $article = News::findOrFail($id);

        return view('news.edit', ['article' => $article]);
    }

    public function destroy($id)
    {
        $article = News::findOrFail($id);
        $article->delete();

        return redirect()->route('news.index')->with('success', 'Artikel verwijderd!');
    }

}
