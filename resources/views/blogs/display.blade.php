@extends('layouts.app')

@section('title', 'Category: ' . $category->name)

@section('content')
    <h2 class="text-center mb-4 featured-blog">Blogs in Category: {{ $category->name }}</h2>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 mt-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title heading">{{ $post->title }}</h5>
                        <p class="card-text paragraph">{{ Str::limit($post->short_description,60) }}</p>
                        <a class="link" href="{{ route('blogs.show', $post->slug) }}">Read More</a>
                        <a class="text-decoration-none text-dark fw-bold font" 
                         href="{{ route('blogs.display', ['category' => $post->category->name]) }}" 
                         style="margin-left: 100px;">
                             {{ $post->category->name }}
                         </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

