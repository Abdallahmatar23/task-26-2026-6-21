@extends('admin.layouts.master')
@section('title', 'Revolve - Dashboard')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <!-- Total Posts -->
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card shadow-sm border-0 mb-4">
                        <div class="card-body p-4 text-center">
                            <i class="bi bi-file-earmark-text" style="font-size: 2rem; color:#4154f1;"></i>
                            <h4 class="card-title mt-2">Total Posts</h4>
                            <div class="ps-3">
                                <h2 class="mb-0">{{ $totalPosts }}</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Categories -->
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card shadow-sm border-0 mb-4">
                        <div class="card-body p-4 text-center">
                            <i class="bi bi-tags" style="font-size: 2rem; color:#2eca6a;"></i>
                            <h4 class="card-title mt-2">Total Categories</h4>
                            <div class="ps-3">
                                <h2 class="mb-0">{{ $totalCategories }}</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Comments -->
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card shadow-sm border-0 mb-4">
                        <div class="card-body p-4 text-center">
                            <i class="bi bi-chat-dots" style="font-size: 2rem; color:#ff771d;"></i>
                            <h4 class="card-title mt-2">Total Comments</h4>
                            <div class="ps-3">
                                <h2 class="mb-0">{{ $totalComments }}</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Posts Count -->
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card shadow-sm border-0 mb-4">
                        <div class="card-body p-4 text-center">
                            <i class="bi bi-star" style="font-size: 2rem; color:#e91e63;"></i>
                            <h4 class="card-title mt-2">Featured Posts</h4>
                            <div class="ps-3">
                                <h2 class="mb-0">{{ $featuredPostsCount }}</h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

@endsection
