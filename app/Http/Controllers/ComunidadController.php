<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;

class ComunidadController extends Controller
{
    public function index()
    {
       $posts = Post::all();
       return view('components.comunidad.index',compact('posts'));
    }

    public function create()
    {
        $categs = Category::all();

        return view('components.comunidad.create', compact('categs'));
    }
    public function store(Request $request)
    {
        $fileName = time().'.'.$request->file_image->extension();
        $request->file_image->move(public_path('images/posts/'), $fileName);
       $post = Post::create([
            'title' => $request->titulo,
            'excerpt' => $request->excerpt,
            'image'=> $fileName,
            'content' => $request->content,
        ]);

        DB::table('category_post')->insert([
            'post_id' => $post->id,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('comunidad.index');
    }

    public function show(Post $post)
    {
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
