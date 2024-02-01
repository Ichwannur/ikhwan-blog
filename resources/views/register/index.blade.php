@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin w-100 m-auto">
            <form>
              <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
              <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
                <label for="name">Nama</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="name">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            </form>
            <small class="d-block text-center">Have Account? <a href="/login">Login</a></small>
        </main>
    </div>
</div>



  @endsection