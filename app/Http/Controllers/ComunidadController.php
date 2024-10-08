<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class ComunidadController extends Controller
{
    public function index()
    {
       $posts = Post::all();
       return view('components.comunidad.index',compact('posts'));
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
       // $post = Post::find($post);
        return view('components.comunidad.show',['post' => $post]);
    }
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
