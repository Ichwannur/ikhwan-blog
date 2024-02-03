@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
          
              <div class="form-floating">
                <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required autofocus>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" required class="form-control" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center">Not Registered? <a href="/register">Register</a></small>
        </main>
    </div>
</div>



  @endsection