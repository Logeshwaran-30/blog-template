@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Left Side: Main Post Content -->
        <div class="col-lg-8 mt-4">
            <div class="post-content">
                <h1 class=" show-title">{{ $post->title }}</h1><br>
                <p class=" paragraph">Published on: {{ $post->created_at->format('M d, Y') }}</p> <br>
                <p class="card-text paragraph">{{ $post->description }}</p>
                <p class="paragraph"><strong class='font'>Category:</strong> {{ $post->category->name }}</p>
                <p class="paragraph"><strong class='font'>Status:</strong> {{ $post->status }}</p>

                <p class="tag paragraph"><strong class='font'>Tags:</strong> 
                    @foreach($post->tags as $tag)
                        {{ $tag->tag }}
                    @endforeach
                </p>  
            </div>
        </div>

        <!-- Right Side: Related Posts -->
        <div class="col-lg-4">
            <div class="related-posts-section">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title font">Related Posts</h5>
                        <ul class="list-unstyled">
                            @foreach ($related_posts as $related_post)
                                <li>
                                    <a class='link' href="{{ route('blogs.show', ['slug' => $related_post->slug]) }}">
                                        {{ $related_post->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
