@extends('layouts.main')

@section('container')
    <div class="card">
        <div class="card-body">
            <div>
                <h5 class="card-title">
                    {{ $post->title }}
                </h5>
                <p>By <a href="#">{{ $post->user->name }}</a> - Category <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            </div>

            {!! $post->body !!}

        </div>
        <div class="card-footer">
            <a href="/blog">
                <button type="button" class="btn btn-light">
                    Back
                </button>
            </a>
        </div>
    </div>
@endsection
