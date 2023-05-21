@extends('layouts.main')

@section('container')
<div class="row justify-center">
    <div class="col-6 offset-3">
        <main class="form-registration w-100 m-auto">
            <br>
            <form action="/register" method="POST">
                @csrf
                <div class="text-center">
                    <img class="mb-4" src="{{ asset('assets/images/laravel-blog-logo.svg') }}" alt="" width="200">
                </div>
                <h1 class="h3 mb-3 fw-normal">Registration form</h1>
                <div class="form-group">
                    <label for="Fullname">Fullname</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="Fullname" name="name" placeholder="M Iqbal Kurniawan" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="Username" name="username" placeholder="iqbalqq28" value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Email1">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="Email1" aria-describedby="emailHelp" name="email" placeholder="iqbal@example.com" value="{{ old('email') }}">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="Password" name="password" placeholder="password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register Now</button>
                <br>
                <p class="text-center">Already registered ? <a href="/login">Login</a></p>
            </form>
        </main>
    </div>
</div>
@endsection
