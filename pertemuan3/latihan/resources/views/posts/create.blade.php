<x-layout>
    <x-slot:title>Create New Post</x-slot:title>

    <h1>Create New Post</h1>

    @if ($errors->any())
        <div style="background: #f8d7da; padding: 10px; margin-bottom: 20px; border-radius: 4px; color: #721c24;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/posts" method="POST" style="max-width: 600px;">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="title" style="display: block; margin-bottom: 5px; font-weight: bold;">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" 
                   style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;" 
                   required>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="body" style="display: block; margin-bottom: 5px; font-weight: bold;">Content:</label>
            <textarea id="body" name="body" rows="6" 
                      style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;" 
                      required>{{ old('body') }}</textarea>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="user_id" style="display: block; margin-bottom: 5px; font-weight: bold;">Author:</label>
            <select id="user_id" name="user_id" 
                    style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;" 
                    required>
                <option value="">-- Select Author --</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="category_id" style="display: block; margin-bottom: 5px; font-weight: bold;">Category:</label>
            <select id="category_id" name="category_id" 
                    style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;" 
                    required>
                <option value="">-- Select Category --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" style="background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; margin-right: 10px;">Create Post</button>
            <a href="/posts" style="background: #6c757d; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">Cancel</a>
        </div>
    </form>

</x-layout>
