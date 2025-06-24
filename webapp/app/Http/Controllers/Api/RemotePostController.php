<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Exception;

class RemotePostController extends Controller
{
    public function store (Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
            ]);

            $post = Post::create($validated);

            return response()->json([
                'message' =>'success post',
                'data' =>$post,
            ]);
        }catch(Exception $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }
    }
}
