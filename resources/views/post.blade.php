@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <p class="card-text">
                <small>by. <a href="/posts?author={{ $post->author->username }} ">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></small>
                <small class="text-body-secondary"> {{ $post->created_at->diffForHumans() }} </small>
            </p>
            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
            </div>
            @else    
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
            @endif
            <article>
                {!! $post->body !!}
            </article>
            <a href="/posts">Back to Post</a>

        </div>
    </div>
</div>
@endsection