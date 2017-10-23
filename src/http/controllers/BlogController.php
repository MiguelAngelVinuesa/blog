<?php

namespace Cloudware\Blog;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $message = 'Hola maik!! Welcome to your blog :)';
        return view('blog::index');
    }

    public function about()
    {
        return view('blog::about');
    }

    public function post()
    {
        return view('blog::post');
    }

    public function contact()
    {
        return view('blog::contact');
    }
}
