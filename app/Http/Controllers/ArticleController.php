<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::paginate(4);

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article){
        return view('articles.show', compact('article'));
    }
}
