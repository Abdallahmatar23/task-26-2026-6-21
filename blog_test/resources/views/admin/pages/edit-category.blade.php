@extends('admin.layouts.master')
@section('title', 'Revolve - Personal Magazine blog Template')

@section('content')

    {{-- @dd($category->id) --}}
    <main id="main" class="main">

        <div class="pagetitle">
            <h2 class="mb-3">Update category</h2>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">

                            <div class="mb-4">
                                <h5 class="mb-0">Edit category Information</h5>
                                <small class="text-muted">Update the required fields below</small>
                            </div>

                            <form method="POST" action="{{ route('update-category') }}" enctype="multipart/form-data">

                                <input type="hidden" name="id" value="{{ $category->id }}">

                                <!-- Title -->
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" value="{{ $category->title }}"
                                        class="form-control">

                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <input type="text" name="description" value="{{ $category->description }}"
                                        class="form-control">

                                </div>

                                <!-- Buttons -->
                                <div class="d-flex justify-content-between align-items-center">

                                    <a href="{{ route('all-categories') }}" class="btn btn-outline-secondary">
                                        Cancel
                                    </a>

                                    <button type="submit" class="btn btn-primary px-4">
                                        Update category
                                    </button>

                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

@endsection
