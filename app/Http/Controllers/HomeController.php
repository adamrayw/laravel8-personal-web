<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function article()
    {

        return view('home.article', [
            'data' => Post::latest()->paginate(4)
        ]);
    }

    public function detail($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('home.detail', compact('post'));
    }
}
