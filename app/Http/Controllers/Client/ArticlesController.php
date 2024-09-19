<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('pages.articles', [
            'title' => 'Статьи'
        ]);
    }

    public function show(Article $article)
    {
        return view('pages.single-article', [
            'article' => $article,
        ]);
    }
}
