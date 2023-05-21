@extends('layouts.main')

@section('container')
    <div class="card">
        <img src="https://codebrisk.com/assets/images/posts/1625808060_laravel-banner1.webp" class="card-img-top" alt="{{ $image }}">
        <div class="card-body">
            <h5 class="card-title">
                {{ $name }}
            </h5>
            <p class="card-text">
                {{ $email }} | {{ $work }}
            </p>
        </div>
    </div>
@endsection
