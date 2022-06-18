<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        return view('articles.index', [
            'title' => 'Articles',
            'articles' => Article::latest()->paginate(8),
        ]);
    }
}
