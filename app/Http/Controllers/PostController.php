<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blogposts.index', [
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('blogposts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('blogposts.create');
    }

    /**
     * Store a newly created Post in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required'
        ]);

        // Create a new Post model object, mass-assign its attributes with
        // the validated data and store it to the database
        $post = Post::create($validated);

        // Redirect to the blog index page
        return redirect()->route('blogs');
    }

    public function edit(Post $post)
    {
        return view('blogposts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required'
        ]);

        $post->update($validated);

        return redirect()->route('blogs');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('blogs');
    }
}
