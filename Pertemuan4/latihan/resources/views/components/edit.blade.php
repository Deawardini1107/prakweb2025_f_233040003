<x-layout>
    <x-slot:title>Edit Post</x-slot:title>

    <h1>Edit Post</h1>

    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $post->title }}">

        <textarea name="body">{{ $post->body }}</textarea>

        <select name="user_id">
            @foreach ($users as $u)
                <option value="{{ $u->id }}" {{ $u->id == $post->user_id ? 'selected' : '' }}>
                    {{ $u->name }}
                </option>
            @endforeach
        </select>

        <select name="category_id">
            @foreach ($categories as $c)
                <option value="{{ $c->id }}" {{ $c->id == $post->category_id ? 'selected' : '' }}>
                    {{ $c->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Update</button>
    </form>
</x-layout>
