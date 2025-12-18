<x-layout>
    <x-slot:title>Posts</x-slot:title>

    <h1>All Posts</h1>

    @if (session('success'))
        <div style="background: #d4edda; padding: 10px; margin-bottom: 20px; border-radius: 4px;">
            {{ session('success') }}
        </div>
    @endif

    <a href="/posts/create" style="background: #007bff; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px; display: inline-block; margin-bottom: 20px;">+ Add New Post</a>
    
    <hr>

    @forelse($posts as $post)
        <div style="margin-bottom: 20px; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->body }}</p>

            <p style="color: #666; font-size: 14px;">
                <strong>Author:</strong> {{ $post->user->name }} <br>
                <strong>Category:</strong> {{ $post->category->name }}<br>
                <strong>Created:</strong> {{ $post->created_at->format('d M Y') }}
            </p>

            <div style="margin-top: 10px;">
                <!-- Edit Button -->
                <a href="/posts/{{ $post->id }}/edit" style="background: #ffc107; color: black; padding: 5px 12px; text-decoration: none; border-radius: 4px; margin-right: 5px;">Edit</a>

                <!-- Delete Button -->
                <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: #dc3545; color: white; padding: 5px 12px; border: none; border-radius: 4px; cursor: pointer;" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <p style="color: #999;">No posts found. <a href="/posts/create">Create your first post!</a></p>
    @endforelse

</x-layout>
