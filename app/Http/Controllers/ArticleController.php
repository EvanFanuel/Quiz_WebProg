<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug)
    {
        $article = Article::with(['category', 'writer'])
            ->where('slug', $slug)
            ->firstOrFail();
        
        $article->increment('views');

        return view('articles.show', compact('article'));
    }
}
