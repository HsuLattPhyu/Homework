<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostCreateRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function store(PostCreateRequest $request)
    {
        // Convert 'is_published' to an integer (1 if it exists, 0 otherwise)
        $data = $request->only(['title', 'content']);
        $data['is_published'] = $request->has('is_published') ? 1 : 0;

        Post::create($data);

        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'is_published' => 'nullable',
        ]);

        // Convert 'is_published' to an integer (1 if it exists, 0 otherwise)
        $data = $request->only(['title', 'content']);
        $data['is_published'] = $request->has('is_published') ? 1 : 0;

        $post = Post::find($id);
        $post->update($data);

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
}

