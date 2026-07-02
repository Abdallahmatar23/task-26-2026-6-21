@extends('client.layouts.master')
@section('title', 'Category')
@section('content')

    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="lg-title">{{ $category->title }}</h2>
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
                        @foreach ($posts as $post)
                            <div class="col-lg-6 col-md-6">
                                <article class="post-grid mb-5">
                                    <div class="post-thumb mb-4">
                                        <img src="{{ asset($post->image) }}" alt="" class="img-fluid w-100">
                                    </div>
                                    <span
                                        class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{ $post->title }}</span>
                                    <h3 class="post-title mt-1"><a href="blog-single.html">{{ $post->description }}</a>
                                    </h3>

                                    <span class=" text-muted  text-capitalize">{{ $post->created_at }}</span>

                                </article>
                            </div>
                        @endforeach
                    </div>

                    <div class="pagination mt-5 pt-4">
                        {{ $posts->links('pagination::bootstrap-5') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="sidebar-wrap mt-5 mt-lg-0">
                            <div class="sidebar-widget about mb-5 text-center p-3">
                                <div class="about-author">
                                    <img src="images/author.jpg" alt="" class="img-fluid">
                                </div>
                                <h4 class="mb-0 mt-4">Liam Mason</h4>
                                <p>Travel Blogger</p>
                                <p>I'm Liam, last year I decided to quit my job and travel the world. You can follow my
                                    journey on this blog!</p>
                                <img src="images/liammason.png" alt="" class="img-fluid">
                            </div>

                            <div class="sidebar-widget follow mb-5 text-center">
                                <h4 class="text-center widget-title">Follow Me</h4>
                                <div class="follow-socials">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-youtube"></i></a>
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                </div>
                            </div>

                            <div class="sidebar-widget mb-5 ">
                                <h4 class="text-center widget-title">Trending Posts</h4>

                                @foreach($randPosts as $randPost)
                                <div class="sidebar-post-item-big">
                                    <a href="blog-single.html"><img src="{{asset($randPost->image)}}" alt=""
                                            class="img-fluid"></a>
                                    <div class="mt-3 media-body">
                                        <span class="text-muted letter-spacing text-uppercase font-sm">{{$randPost->created_at}}</span>
                                        <h4><a href="blog-single.html">{{ $randPost->title }}</a></h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>


                            <div class="sidebar-widget category mb-5">
                                <h4 class="text-center widget-title">Catgeories</h4>
                                <ul class="list-unstyled">
                                    <li class="align-items-center d-flex justify-content-between">
                                        <a href="#">Innovation</a>
                                        <span>14</span>
                                    </li>
                                    <li class="align-items-center d-flex justify-content-between">
                                        <a href="#">Software</a>
                                        <span>2</span>
                                    </li>
                                    <li class="align-items-center d-flex justify-content-between">
                                        <a href="#">Social</a>
                                        <span>10</span>
                                    </li>
                                    <li class="align-items-center d-flex justify-content-between">
                                        <a href="#">Trends</a>
                                        <span>5</span>
                                    </li>
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
