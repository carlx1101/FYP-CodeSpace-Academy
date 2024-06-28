<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'required|string',
            'tags' => 'nullable|string',
            'post_cover' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('post_cover')) {
            $validatedData['post_cover'] = $request->file('post_cover')->store('post_covers', 'public');
        }

        $validatedData['user_id'] = Auth::id();

        Post::create($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'required|string',
            'tags' => 'nullable|string',
            'post_cover' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('post_cover')) {
            if ($post->post_cover) {
                Storage::disk('public')->delete($post->post_cover);
            }
            $validatedData['post_cover'] = $request->file('post_cover')->store('post_covers', 'public');
        }

        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        if ($post->post_cover) {
            Storage::disk('public')->delete($post->post_cover);
        }
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
