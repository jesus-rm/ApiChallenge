<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('show_post', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts');
    }
}
