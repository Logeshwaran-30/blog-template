@extends('layouts.app')

@section('title', 'Posts tagged with ' . $tag->tag)

@section('content')
<div class="container-sm" style="max-width: 500px; margin: auto;">
    <h2 class="mt-4">Posts tagged with - {{ $tag->tag }}</h2>

    @if ($posts->isEmpty())
        <p>No posts found for this tag.</p>
    @else
        @foreach($posts as $post)
            <div class="card mt-3">
                <div class="card-body">
                    <h3>
                        <a class="link" href="{{ route('blogs.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                    </h3>
                    <p class="font">{{ $post->short_description }}</p>
                </div>
            </div>
        @endforeach

        <!-- Pagination -->
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    @endif
</div>
@endsection
