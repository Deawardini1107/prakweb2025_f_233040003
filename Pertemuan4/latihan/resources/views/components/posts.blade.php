<x-layout>
    <x-slot:title>Posts</x-slot:title>

    <h2>All Posts</h2>

    @foreach ($posts as $post)
        <div style="margin-bottom:20px;">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->body }}</p>
            <small>
                User: {{ $post->user->name }} |
                Category: {{ $post->category->name }}
            </small>
        </div>
    @endforeach

</x-layout>
