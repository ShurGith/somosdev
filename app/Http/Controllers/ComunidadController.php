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
       return view('components.comunidad.index',compact('posts', 'posts_lasts'));
    }
    public function aboutus()
    {
        $posts = Post::all();
        return view('home',
                    ['pagina' => 'About us',
                    'grupo' => 'aboutus',
                    'datos' => $posts]);
    }

    public function home(Request $request)
    {
        $pagina = "home";
        $grupo = $pagina;
        $datos = Post::all();
        $random_posts = Post::where('is_published', true)
        ->inRandomOrder()
        ->limit(6)
        ->get();
        $posts_lasts = Post::orderBy('created_at', 'desc')->take(6)->get();
        /*$filterPosts = Post::where('is_published', true)
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();*/
        if ($request->wantsJson()) {
            return $random_posts;
        }else{
            return view('home',compact('datos', 'pagina', 'grupo', 'posts_lasts', 'random_posts'));
        }
    }

    public function categs()
    {
        $categs = Category::get();
        return view('home',
                    ['pagina' => 'Categs',
                    'grupo'=>'categs',
                    'datos' => $categs]);
    }

    public function category_simple($id)
    {
        $categ = Category::find($id);
        $posts = $categ->posts;
        return view('home',
                    ['pagina' => 'Categ',
                    'grupo'=>'category',
                    'titulo' => true,
                    'datos' => $categ,
                    'posts' => $posts]);
    }

    public function team()
    {
        $posts = Post::all();
        return view('home',
                    ['pagina'=>'Team',
                    'grupo'=>'team',
                    'datos'=>$posts]);
    }

    public function create()
    {
        $categs = Category::all();
        return view('components.comunidad.create', compact('categs'));
    }

    public function store(PostRequest $request)
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
        return view('home',
                    ['pagina'=>'show',
                    'grupo'=>'show',
                    'datos'=>$post]);
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
