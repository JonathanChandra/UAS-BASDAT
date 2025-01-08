@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6 text-center">Edit Post</h1>

        <div class="bg-white shadow-lg rounded-lg p-6 max-w-lg mx-auto">
            <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ $post->title }}" class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                    <textarea name="content" id="content" rows="5" class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>{{ $post->content }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" name="image" id="image" class="w-full mt-2 px-4 py-2 border rounded-lg">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="mt-4 w-full h-40 object-cover rounded">
                    @endif
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="w-full mt-2 px-4 py-2 border rounded-lg">
                        <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Published</option>
                        <option value="archived" {{ $post->status == 'archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="aktif" class="block text-sm font-medium text-gray-700">Active</label>
                    <input type="checkbox" name="aktif" id="aktif" {{ $post->aktif ? 'checked' : '' }} class="mt-2">
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">Update Post</button>
                    <a href="{{ route('posts.index') }}" class="ml-4 text-gray-500 hover:underline">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
