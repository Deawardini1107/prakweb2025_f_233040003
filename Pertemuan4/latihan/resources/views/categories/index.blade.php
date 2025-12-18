<x-layout>
    <x-slot:title>Categories</x-slot:title>

    <h1>Category List</h1>

    @if (session('success'))
        <div style="background: #d4edda; padding: 10px; margin-bottom: 20px; border-radius: 4px;">
            {{ session('success') }}
        </div>
    @endif

    <a href="/categories/create" style="background: #007bff; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px; display: inline-block; margin-bottom: 20px;">+ Add New Category</a>
    
    <hr>

    @forelse($categories as $cat)
        <div style="margin-bottom: 15px; padding: 15px; border: 1px solid #ddd; border-radius: 8px; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <strong style="font-size: 18px;">{{ $cat->name }}</strong>
                <p style="color: #666; font-size: 14px; margin: 5px 0 0 0;">
                    {{ $cat->posts->count() }} post(s) | Created: {{ $cat->created_at->format('d M Y') }}
                </p>
            </div>

            <div>
                <a href="/categories/{{ $cat->id }}/edit" style="background: #ffc107; color: black; padding: 5px 12px; text-decoration: none; border-radius: 4px; margin-right: 5px;">Edit</a>

                <form action="/categories/{{ $cat->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: #dc3545; color: white; padding: 5px 12px; border: none; border-radius: 4px; cursor: pointer;" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <p style="color: #999;">No categories found. <a href="/categories/create">Create your first category!</a></p>
    @endforelse

</x-layout>
