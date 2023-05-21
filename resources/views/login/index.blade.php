@extends('layouts.main')

@section('container')
<div class="row justify-center">
    <div class="col-6 offset-3">
        <main class="form-signin w-100 m-auto">
            <br>
            <form action="/login" method="POST">
                @csrf
                <div class="text-center">
                    <img class="mb-4" src="{{ asset('assets/images/laravel-blog-logo.svg') }}" alt="" width="200">

                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                </div>
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="Email" aria-describedby="emailHelp" placeholder="iqbal@example.com" name="email" autofocus required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password" placeholder="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                <br>
                <p class="text-center">Not registered ? <a href="/register">Register</a></p>
            </form>
        </main>
    </div>
</div>
@endsection
