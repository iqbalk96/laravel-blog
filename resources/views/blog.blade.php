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
        <div class="col-md-8 col-sm-5 mb-3">
            <h5 class="mt-3">All Blogs</h5>
        </div>
        <div class="col-md-4 col-sm-7 mb-3">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}" />
                @endif
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Post title.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-md-9">
            <div class="row">
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
                               <small>
                                    Category : <a href="/blog?category={{$post->category->slug}}">{{ $post->category->name }}</a>
                               </small>
                            </div>
                        </div>
                    </div>
                @empty
                    <x-empty-data link="/" title="blog" />
                @endforelse
            </div>
        </div>
        <div class="col-lg-2 col-md-3">
            <div class="row">
                <div class="col-12">
                    <section class="text-sm-right">
                        <h5>
                            <a href="/categories" class="text-decoration-none">All Categories</a>
                        </h5>
                        <ul class="list-group">
                            @foreach ($categories as $category)
                                <li class="list-group-item">
                                    <a href="/categories/{{ $category->slug }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
