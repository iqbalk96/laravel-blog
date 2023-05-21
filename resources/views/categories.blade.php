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
        @foreach ($categories as $category)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <a href="/categories/{{ $category->slug }}" class="text-decoration-none">
                            <h5 class="card-title">
                                {{ $category->name }}
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
