<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show( $id ) 
    {
        $post = Post::find( $id );
        return view('posts.show',  compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        // dd(request('title'));

        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');

        //$post->save();
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create(request(['title', 'body']));


        return redirect('/');

    }
    
    
}
