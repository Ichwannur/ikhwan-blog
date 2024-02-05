@extends('layouts.main')

@section('container')
<h1 class="text-center">{{$title}}</h1>
<div class="row justify-content-center">
    <div class="col-md-12">
        <form action="/posts" method="get">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Search.." value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
    </div>
</div>
@if ($posts->count())
<div class="card mb-3">
    @if ($posts[0]->image)
    <div style="max-height: 350px; overflow:hidden">
        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top img-fluid" alt="{{ $posts[0]->category->name }}">
    </div>
    @else    
    <img src="https://source.unsplash.com/1200x300?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    @endif

    <div class="card-body text-center">
        <h5 class="card-title"> {{ $posts[0]->title }} </h5>
        <p>by. <a href="/posts?author={{ $posts[0]->author->username }}">{{$posts[0]->author->name}}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></p>
        <p class="card-text"> {{ $posts[0]->excerpt }} </p>
        <p class="card-text"><small class="text-body-secondary"> {{ $posts[0]->created_at->diffForHumans() }} </small></p>
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>

</div>

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0, 0.7)">
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                </div>
                
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
                @else    
                <img src="https://source.unsplash.com/400x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }} </h5>
                    <p>by. <a href="/posts?author={{ $post->author->username }}">{{$post->author->name}}</a></p>
                    <p class="card-text"><small class="text-body-secondary"> {{ $post->created_at->diffForHumans() }} </small></p>
                    <p class="card-text">{{ $post->excerpt }} </p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<p class="text-center fs-4">No Post Found</p>
@endif
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>

@endsection
