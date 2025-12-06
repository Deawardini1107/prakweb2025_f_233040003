public function edit(Post $post)
{
    return view('posts.edit', [
        'post' => $post,
        'users' => \App\Models\User::all(),
        'categories' => \App\Models\Category::all()
    ]);
}

public function update(Request $request, Post $post)
{
    $request->validate([
        'title' => 'required',
        'body' => 'required',
        'user_id' => 'required',
        'category_id' => 'required',
    ]);

    $post->update($request->all());

    return redirect('/posts')->with('success', 'Post berhasil diupdate');
}

public function destroy(Post $post)
{
    $post->delete();
    return redirect('/posts')->with('success', 'Post berhasil dihapus');
}
