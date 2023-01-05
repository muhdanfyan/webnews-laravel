<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'content'   => 'required',
            'author'    => 'required'
        ]);
        News::create($request->all());
        return redirect()->route('news.index')
                        ->with('success','Berita berhasil ditambahkan.');
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required'
        ]);
        $news->update($request->all());
        return redirect()->route('news.index')
                        ->with('success','Berita berhasil diperbaharui.');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')
                         ->with('success','Berita berhasil dihapus.');
    }

}
