<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Author;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('create', compact('authors'));
    }

    // 新規登録（PostRequestを使う）
    public function store(PostRequest $request)
    {
        $validated = $request->validated();

        Post::create($validated);

        return redirect()->route('posts.index')->with('success', '投稿を作成しました。');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $authors = Author::all();
        return view('edit', compact('post', 'authors'));
    }

    // 更新（PostRequestを使い、$idから取得）
    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        $validated = $request->validated();

        $post->update($validated);

        return redirect()->route('posts.index')->with('success', '投稿を更新しました。');
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }
}

