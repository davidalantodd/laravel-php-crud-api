<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return Article::all();
    }
    
    public function show(Article $article)
    {
        return $article;
    }
    
    public function store(Request $request) 
    {
        Article::create($request->all());
    }
    
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
    }
    
    public function delete(Article $article)
    {
        $article->delete();
    }
}
