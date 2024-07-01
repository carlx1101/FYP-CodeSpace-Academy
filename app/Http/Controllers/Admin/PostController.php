<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tutor\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.blogs.index', compact('posts'));
    }
}
