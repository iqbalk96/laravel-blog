@extends('layouts.dashboard')
@section('container')
    <div class="page-header flex-wrap">
        <div class="header-left d-flex flex-wrap mt-2 mt-sm-0">
            <a href="/dashboard/posts/create">
                <button class="btn btn-primary mb-2 mb-md-0 mr-2">
                    Add New Post
                </button>
            </a>
        </div>
        <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">

            <div class="d-flex align-items-center">
                <a href="#">
                    <p class="m-0 pr-3">Dashboard</p>
                </a>
                <a class="pl-3" href="#">
                    <p class="m-0">All Posts</p>
                </a>
            </div>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">
                                    {{ $loop->iteration }}
                                </th>
                                <td>
                                    {{ $post->title }}
                                </td>
                                <td>
                                    {{ $post->category->name }}
                                </td>
                                <td>
                                    <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info btn-sm">
                                        <i class="mdi mdi-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-warning btn-sm">
                                        <i class="mdi mdi-table-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        <i class="mdi mdi-delete-forever"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
