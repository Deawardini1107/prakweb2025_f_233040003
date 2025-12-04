<x-layout>
    <x-slot:title>Categories</x-slot:title>

    <h2>All Categories</h2>

    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>

</x-layout>
