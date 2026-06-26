@extends('admin.layouts.master')
@section('title', 'Revolve - Personal Magazine blog Template')

@section('content')

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Categories</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Home</a>
                </li>
                <li class="breadcrumb-item active">Categories</li>
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
                            <h3 class="mb-0">Categories List</h3>

                            <a href="{{ route('create-category') }}" class="btn btn-success">
                                <i class="bi bi-plus-circle me-1"></i>
                                Add Category
                            </a>
                        </div>

                        <!-- Table -->
                        <table class="table table-hover table-striped align-middle datatable">
                            <thead class="table-light">
                                <tr>
                                    <th>#ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>

                                        <td>{{ $category->title }}</td>

                                        <td>{{ $category->description }}</td>


                                        <td>{{ $category->created_at }}<td>

                                            <div class="btn-group">

                                                <a href="{{ route('edit-category' , $category->id) }}" class="btn btn-primary btn-sm">
                                                    Edit
                                                </a>

                                                <form method="POST" action="{{ route('delete-category') }}"
                                                    onsubmit="return confirm('Are you sure you want to delete this category?')">

                                                    <input type="hidden" name="id" value="{{ $category->id }}">

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
