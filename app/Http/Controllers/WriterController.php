<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::withCount('articles')->get();
        return view('writers.index', compact('writers'));
    }

    public function show($id)
    {
        $writer = Writer::findOrFail($id);
        $articles = $writer->articles()->with('category')->latest()->get();
        
        return view('writers.show', compact('writer', 'articles'));
    }
}
