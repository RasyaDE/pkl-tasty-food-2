<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all(); 
        return view('admin.news.index',compact('news'));
    }

    public function create() {
        return view('admin.news.create');
    }

    public function store(Request $request) {
        
    }

    public function edit() {

    }
}