@extends('layouts.main')

@section('container')
<h1>Halaman Category</h1>

<div class="container">
    <div class="row">
        @foreach ($category as $category)

        <div class="col-md-4">

            <a href="/posts?category={{ $category->slug}}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/400x400?{{ $category->name }}" class="card-img-top" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7);">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>

        @endforeach
    </div>
</div>
@endsection