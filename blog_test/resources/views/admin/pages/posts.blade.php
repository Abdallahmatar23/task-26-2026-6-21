@extends('admin.layouts.master')
@section('title', 'Revolve - Personal Magazine blog Template')

@section('content')

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Posts</h1>

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Posts</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">

                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="mb-0">Posts List</h3>
                                <h3 class="mb-0">{{ $posts->count() }} Post</h3>

                                {{-- <a href="{{ route('create.post') }}" class="btn btn-success">
                                <i class="bi bi-plus-circle me-1"></i>
                                Add post
                            </a> --}}
                            </div>

                            <!-- Table -->
                            <table class="table table-hover table-striped align-middle text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th>#ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Created by</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>

                                            <td>{{ $post->title }}</td>

                                            <td>{{ $post->description }}</td>

                                            <td><img class="img-fluid" src="{{ asset($post->image) }}"
                                                    alt="post-thumbnail" /></td>

                                            <td>{{ $post->user->name }}</td>

                                            <td>{{ $post->created_at }}</td>

                                            <td>

                                                <div class="btn-group">

                                                    <a href="#" class="btn btn-primary btn-sm">
                                                        Edit
                                                    </a>

                                                    <form method="POST" action="#" onsubmit="return confirm('Are you sure you want to delete this post?')">

                                                        <input type="hidden" name="id" value="">

                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            Delete
                                                        </button>

                                                    </form>

                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

@endsection
