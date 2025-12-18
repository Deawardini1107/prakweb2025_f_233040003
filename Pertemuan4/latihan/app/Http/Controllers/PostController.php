<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of posts
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::with(['user', 'category'])->get()
        ]);
    }

    /**
     * Show the form for creating a new post
     */
    public function create()
    {
        return view('posts.create', [
            'users' => User::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created post in storage
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        Post::create($validated);

        return redirect('/posts')->with('success', 'Post berhasil ditambahkan');
    }

    /**
     * Display the specified post
     */
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified post
     */
    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post,
            'users' => User::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified post in storage
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post->update($validated);

        return redirect('/posts')->with('success', 'Post berhasil diupdate');
    }

    /**
     * Remove the specified post from storage
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('success', 'Post berhasil dihapus');
    }
}
