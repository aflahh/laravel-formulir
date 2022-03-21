<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "title" => "Halaman Semua Artikel",
            "articles" =>  Article::latest()->get()
        ]);
    }
    
    public function content(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }
}
