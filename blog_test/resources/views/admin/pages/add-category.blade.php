@extends('admin.layouts.master')
@section('title', 'Revolve - Personal Magazine blog Template')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h2 class="mb-3">Add Category</h2>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="mb-0">Category Information</h5>
                            <small class="text-muted">Fill all required fields below</small>
                        </div>

                        <form method="POST" action="{{ route('store-category') }}" enctype="multipart/form-data">

                            <!-- Title -->
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="Enter Category Title" value="">


                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" name="description" class="form-control"
                                    placeholder="Enter category description" value="">
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between align-items-center">

                                <a href="" class="btn btn-outline-secondary">
                                    Cancel
                                </a>

                                <button type="submit" class="btn btn-primary px-4">
                                    Add category
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
