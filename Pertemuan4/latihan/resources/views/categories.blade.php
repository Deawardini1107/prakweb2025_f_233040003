<x-layout>
    <x-slot:title>Categories</x-slot:title>

    <h1>Category List</h1>

    <a href="/categories/create">+ Add Category</a>

    <ul>
        @foreach ($categories as $cat)
            <li>
                {{ $cat->name }}

                <a href="/categories/{{ $cat->id }}/edit">Edit</a>

                <form action="/categories/{{ $cat->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>

            </li>
        @endforeach
    </ul>
</x-layout>
