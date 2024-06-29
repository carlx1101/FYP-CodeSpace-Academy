<?php

namespace App\Http\Controllers\Tutor;

use App\Models\Tutor\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->get();
        return view('tutor.blogs.index', compact('posts'));
    }

    public function create()
    {
        return view('tutor.blogs.create');
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

        $post= Post::create($validatedData);

        return response()->json(['success' => true, 'post' => $post]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('tutor.blogs.edit', compact('post'));
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
            // Delete the old cover image if it exists
            if ($post->post_cover) {
                Storage::disk('public')->delete($post->post_cover);
            }
            // Store the new cover image
            $validatedData['post_cover'] = $request->file('post_cover')->store('post_covers', 'public');
        } else {
            // Keep the existing cover image
            $validatedData['post_cover'] = $post->post_cover;
        }

        $post->update($validatedData);

        // return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
        return response()->json(['success' => true, 'message' => 'Post updated successfully.']);

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
