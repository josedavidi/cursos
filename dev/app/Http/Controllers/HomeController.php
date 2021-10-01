<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Service;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function acercons(){

        $data = Http::get('https://fws-api.app/api/v1.0/getAllProducts');
        // $res = $data->body();
        // $productos = json_decode($res);

        $res = collect($data->json());

        //$productos = $res->whereIn('id_categoria', [1])->take(12);
        $categories = $res->unique('id_categoria');
        $categories->values()->all();

        return view('acercons' , compact('categories'));
    }

    public function infinite()
    {
        $posts = Post::paginate(6);
        return view('infinite', compact('posts'));
    }

    public function getPosts()
    {
        return Post::orderBy('id', 'DESC')->paginate();
        
    }
}
