<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        //dd(Post::all());
        //create instance of post model class
        $posts = Post::all();
        //return view('post.index', compact('post'));
        //returning view and passing data to a view
        return view('posts.index', ['posts'=>$posts]);
    }

    public function edit(Post $post){
        return view('posts.edit', ['post'=> $post]);
    }
    
    public function update(Post $post){
        //dd(request()->all());
        request()->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $post->update([
            'title'=>request('title'),
            'content'=>request('content'),
        ]);

        return redirect('/posts');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        request()->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        Post::create([
            'title'=>request('title'),
            'content'=>request('content')
        ]);

        return redirect('/posts');
    }

    public function destroy(Post $post){
        $post->delete();
        
        return redirect('/posts');

    }

}
