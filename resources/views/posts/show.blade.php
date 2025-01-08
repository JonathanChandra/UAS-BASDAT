@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6 text-center">{{ $post->title }}</h1>

        <div class="bg-white shadow-lg rounded-lg p-6 max-w-4xl mx-auto">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-96 object-cover rounded mb-6">
            @endif

            <div class="text-gray-700">
                <p class="mb-4">{{ $post->content }}</p>
                <p class="text-sm text-gray-500">Status: <span class="font-semibold">{{ ucfirst($post->status) }}</span></p>
                <p class="text-sm text-gray-500">Created At: {{ $post->created_at->format('d M Y, H:i') }}</p>
            </div>

            <div class="mt-6">
                <a href="{{ route('posts.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Back to List</a>
            </div>
        </div>
    </div>
@endsection
