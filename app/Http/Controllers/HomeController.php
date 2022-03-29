<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/home', [
            'title' => 'Home | MUMUSIK',
            'posts' => Post::all()
        ]);
    }

    public function handleAdmin()
    {
        return view('admin/home', [
            'title' => 'Home | MUMUSIK',
            'posts' => Post::all()
        ]);
    }

}
