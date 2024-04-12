<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Visitor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $visitors = Visitor::all();
        $numVisitors = $visitors->count();
        $numPosts = Post::count();
        $data = [];

        foreach ($visitors as $visitor) {
            $postPerVisitors = Post::where('visitor_id', $visitor->id)->count();
            $data[$visitor->username] = $postPerVisitors;
        }
        return view('home', compact('numVisitors', 'numPosts', 'data'));
    }
}
