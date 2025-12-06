<x-layout>
    <x-slot:title>Posts</x-slot:title>

    <h1>All Posts</h1>

    <a href="/posts/create">+ Add Post</a>
    <hr>

    @foreach($posts as $post)
        <div style="margin-bottom: 20px;">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->body }}</p>

            <p>
                Author: {{ $post->user->name }} <br>
                Category: {{ $post->category->name }}
            </p>

            <!-- Tombol Edit -->
            <a href="/posts/{{ $post->id }}/edit">Edit</a>

            <!-- Tombol Delete -->
            <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

            <hr>
        </div>
    @endforeach

</x-layout>
