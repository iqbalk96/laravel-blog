@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-12">
            <img src="https://img.freepik.com/premium-photo/woman-works-office-blue-background-concept-workspace-working-computer-freelance-banner_164357-1144.jpg?w=2000"
                alt="Banner" class="w-100">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h5>{{ $title }}</h5>
                </div>
                <div class="col-md-6">
                    <form action="/posts">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                          </div>
                    </form>
                </div>
                @forelse ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="/blog/{{ $post->slug }}">
                                    <h5 class="card-title">
                                        {{ $post->title }}
                                    </h5>
                                </a>
                                <p>By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a></p>
                                <p class="card-text">
                                    {{ $post->excerpt }}
                                </p>
                            </div>
                            <div class="card-footer">
                                Category : {{ $post->category->name ? $post->category->name : 'Develop' }}
                            </div>
                        </div>
                    </div>
                @empty
                    <x-empty-data link="/" title="blog" />
                @endforelse
            </div>
        </div>
    </div>
@endsection
