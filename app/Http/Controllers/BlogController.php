<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::published()
                    ->orderBy('published_at', 'desc')
                    ->paginate(10);
        
        return view('blog', compact('blogs'));
    }
    
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
                   ->where('is_published', true)
                   ->firstOrFail();
        
        return view('blog.show', compact('blog'));
    }
}