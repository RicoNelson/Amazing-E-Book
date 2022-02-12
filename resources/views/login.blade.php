@extends('layout')

@section('body')

@if (session()->has('regis_success'))
<div class="container d-flex justify-content-center mt-3">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('regis_success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

@if (session()->has('loginError'))
<div class="container d-flex justify-content-center mt-3">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

<div class="container">
    <form action="/login-try" method="post">
        @csrf
        <h2>Log In</h2>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp" name="email" id="email" placeholder="name@example.com" autofocus required >
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
        <p>Not Registered? <a href="/register">Register Now!</a></p>
    </form>
</div>
@endsection