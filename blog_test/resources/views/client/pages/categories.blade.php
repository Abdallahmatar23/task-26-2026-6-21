@extends('client.layouts.master')
@section('title', 'Categories')
@section('content')

    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="lg-title">All Categories</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach ($categories as $category)
                            <div class="col-lg-6 col-md-6">
                                <article class="post-grid mb-5">
                                    <div class="post-thumb mb-4">
                                        <img src="{{ asset($category->image) }}" alt="" class="img-fluid w-100">
                                    </div>
                                    <span
                                        class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{ $category->title }}</span>
                                    <h3 class="post-title mt-1"><a href="{{ route('blog') }}">{{ $category->description }}</a>
                                    </h3>

                                    <span class=" text-muted  text-capitalize">{{ $category->created_at }}</span>

                                </article>
                            </div>
                        @endforeach
                    </div>

                    <div class="pagination mt-5 pt-4">
                        {{ $categories->links('pagination::bootstrap-5') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="sidebar-wrap mt-5 mt-lg-0">


                            <div class="sidebar-widget category mb-5">
                                <h4 class="text-center widget-title">Catgeories</h4>
                                <ul class="list-unstyled">
                                    @foreach ($categories as $category)
                                        <li class="align-items-center d-flex justify-content-between">
                                            <a href="{{ route('category', $category->id) }}">{{ $category->title }}</a>
                                            <span>{{ $category->posts_count }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="sidebar-widget subscribe mb-5">
                                <h4 class="text-center widget-title">Newsletter</h4>
                                <input type="text" class="form-control" placeholder="Email Address">
                                <a href="#" class="btn btn-primary d-block mt-3">Sign Up</a>
                            </div>

                            <div class="sidebar-widget sidebar-adv mb-5">
                                <a href="#"><img src="images/sidebar-banner3.png" alt=""
                                        class="img-fluid w-100"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
