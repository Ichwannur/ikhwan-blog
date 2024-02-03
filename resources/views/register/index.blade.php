@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin w-100 m-auto">
            <form action="/register" method="post">
              @csrf
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
              <div class="form-floating">
                <input type="text" value="{{ old('name') }}" class="form-control @error('name')is-invalid @enderror" id="name" name="name" placeholder="name">
                <label for="name">Nama</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" value="{{ old('username') }}" class="form-control @error('username')is-invalid @enderror" id="username" name="username" placeholder="name">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" value="{{ old('email') }}" class="form-control @error('email')is-invalid @enderror" id="email" name="email" placeholder="name@example.com">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            </form>
            <small class="d-block text-center">Have Account? <a href="/login">Login</a></small>
        </main>
    </div>
</div>



  @endsection