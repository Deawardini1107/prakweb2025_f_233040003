<x-layout>
    <x-slot:title>Create Category</x-slot:title>

    <h1>Add Category</h1>

    <form action="/categories" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Category name">
        <button type="submit">Save</button>
    </form>
</x-layout>
