@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-md-8">
            <h1 class="mb-2">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success btn-sm">back</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span>edit</a>
            {{-- <a href="" class="btn btn-danger btn-sm">hapus</a> --}}


            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('are you sure?') "><span data-feather="x-circle"></span>hapus </button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mt-3" alt="{{ $post->category->name }}">
                    </div>
                @else    
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid mt-3" alt="{{ $post->category->name }}">
                @endif
            
            
            <article>
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection