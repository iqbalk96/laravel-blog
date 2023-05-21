@extends('layouts.dashboard')
@section('container')
    <div class="page-header flex-wrap">
        <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">

            <div class="d-flex align-items-center">
                <a href="/dashboard">
                    <p class="m-0 pr-3">Dashboard</p>
                </a>
                <a class="pl-3" href="#">
                    <p class="m-0">Detail Post</p>
                </a>
            </div>

        </div>
    </div>

    <div class="card">
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="default image">
        <div class="card-body">
            <div>
                <h5 class="card-title">
                    {{ $post->title }}
                </h5>
                <p>By <a href="#">{{ $post->user->name }}</a> - Category <a href="#">{{ $post->category->name }}</a></p>
            </div>

            {!! $post->body !!}

        </div>
        <div class="card-footer">
            <a href="/dashboard/posts">
                <button type="button" class="btn btn-link">
                    Back
                </button>
            </a>
        </div>
    </div>
@endsection
