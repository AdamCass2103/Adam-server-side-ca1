@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Latest Blog Posts</h2>

    @foreach ($posts as $post)
        <div class="mb-4 p-4 bg-white shadow rounded">
            <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
            <p>{{ $post->body }}</p>
        </div>
    @endforeach
@endsection