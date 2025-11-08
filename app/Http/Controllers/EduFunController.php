<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;

class EduFunController extends Controller
{
    // Home Page
    public function home()
    {
        $articles = Article::with('category', 'writer')->latest()->get();
        return view('home', compact('articles'));
    }

    // Category Page
    public function category($id)
    {
        $category = Category::findOrFail($id);
        $articles = Article::where('category_id', $id)->with('writer')->get();
        return view('category', compact('category', 'articles'));
    }

    // Writers Page
    public function writers()
    {
        $writers = \App\Models\Writer::all();
        return view('writers', compact('writers'));
    }
    public function showWriter($id)
    {
        $writer = \App\Models\Writer::findOrFail($id);
        $articles = \App\Models\Article::where('writer_id', $id)->with('category')->get();
        return view('writer-detail', compact('writer', 'articles'));
    }

    // About Page
    public function about()
    {
        return view('about');
    }

    public function show($id)
    {
        $article = \App\Models\Article::with('category', 'writer')->findOrFail($id);
        return view('detail', compact('article'));
    }

    // Popular Page
    public function popular()
    {
        $articles = \App\Models\Article::orderBy('id', 'asc')->paginate(3); 
        return view('popular', compact('articles'));
    }


}
