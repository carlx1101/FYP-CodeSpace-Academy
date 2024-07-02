<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tutor\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        // dd($posts);
        return view('admin.blogs.index', compact('posts'));
    }



    
    public function destroy(Post $post)
    {
        if ($post->post_cover) {
            Storage::disk('public')->delete($post->post_cover);
        }
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }

}
