@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-md-8">
            <h1 class="mb-2">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success btn-sm">back</a>
            <a href="" class="btn btn-warning btn-sm">edit</a>
            <a href="" class="btn btn-danger btn-sm">hapus</a>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid mt-3" alt="{{ $post->category->name }}">
            <article>
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection