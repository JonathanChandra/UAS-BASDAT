@extends('layouts.app')

@section('content')
 <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Posts</h1>
        <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-6 inline-block">Add New</a>

        <!-- Table Section -->
        <table class="table-auto w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Content</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Created At</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="border-b">
                        <td class="border px-4 py-2">
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-16 h-16 object-cover rounded">
                            @else
                                <span class="text-gray-500">No Image</span>
                            @endif
                        </td>
                        <td class="border px-4 py-2">{{ $post->title }}</td>
                        <td class="border px-4 py-2">{{ Str::limit($post->content, 50) }}</td>
                        <td class="border px-4 py-2">{{ ucfirst($post->status) }}</td>
                        <td class="border px-4 py-2">{{ $post->created_at->format('d M Y') }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('posts.edit', $post) }}" class="text-blue-500 mr-2">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            @foreach ($posts as $post)
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="mb-4">
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-56 object-cover rounded">
                        @else
                            <div class="bg-gray-200 w-full h-40 rounded flex items-center justify-center text-gray-500">
                                No Image
                            </div>
                        @endif
                    </div>
                    <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                    <p class="text-gray-600 text-sm mt-2">{{ Str::limit($post->content, 100) }}</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-sm text-gray-500">{{ $post->created_at->format('d M Y') }}</span>
                        <span class="px-2 py-1 text-xs bg-blue-100 text-blue-500 rounded">
                            {{ ucfirst($post->status) }}
                        </span>
                    </div>
                    <a href="{{ route('posts.show', $post) }}" class="text-blue-500 hover:underline">View</a>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
