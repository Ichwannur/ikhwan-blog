@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
  </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif

  <a href="/dashboard/posts/create" class="btn btn-primary text-decoration-none">Tambah Post</a>
  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)         
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none">detail</a>
            
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none"><span data-feather="edit"></span>edit</a>
            
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('are you sure?') "><span data-feather="x-circle"></span>hapus </button>
            </form>
            {{-- <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-danger text-decoration-none">hapus</a> --}}
          
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
 