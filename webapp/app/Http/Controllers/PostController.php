<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index',compact('posts'));
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'author_id' => 1 
        ]);
        return redirect()->route('posts.index');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit',compact('post'));
    }
    public function update(Request $request,$id) 
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('posts.index');
    } 
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }
}

