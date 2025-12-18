<x-layout>
    <x-slot:title>Create Category</x-slot:title>

    <h1>Add New Category</h1>

    @if ($errors->any())
        <div style="background: #f8d7da; padding: 10px; margin-bottom: 20px; border-radius: 4px; color: #721c24;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/categories" method="POST" style="max-width: 600px;">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; margin-bottom: 5px; font-weight: bold;">Category Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" 
                   style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;" 
                   placeholder="Enter category name"
                   required>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" style="background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; margin-right: 10px;">Create Category</button>
            <a href="/categories" style="background: #6c757d; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">Cancel</a>
        </div>
    </form>

</x-layout>
