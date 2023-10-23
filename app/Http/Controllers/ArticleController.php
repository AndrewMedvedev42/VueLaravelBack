<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $article = new Article;
        $article->title = request('title');
        $article->url = request('url');
        $article->small_description = request('small_description');
        $article->description = request('description');
        $article->status = request('status');
    }

    public function update(Request $request, Article $article)
    {
        $article->status = request('status');
        $article->save();
    }

    public function getAll()
    {
        $articles= Article::get();
        return $articles;
    }

    public function getOne(Request $request)
    {
        $article = Article::find($request("id"));
        return $article;
    }
}
