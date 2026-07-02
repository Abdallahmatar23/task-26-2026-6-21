@extends('client.layouts.master')
@section('title', 'Revolve - Personal Magazine blog Template')

@section('content')
    <!--search overlay start-->

    <!--search overlay end-->


    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <article class="post-grid mb-5 ">
                                    <a class="post-thumb mb-4 d-block" href="{{ route('post' , $post->id) }}">
                                        <img src="{{ asset($post->image) }}" alt="" class="img-fluid w-100">
                                    </a>

                                    <div class="post-content-grid">
                                        <div class="label-date">
                                            <span class="day">{{ $post->created_at->format('d') }}</span>
                                            <span class="month text-uppercase">{{ $post->created_at->format('F') }}</span>
                                        </div>
                                        <span
                                            class="cat-name text-color font-extra font-sm text-uppercase letter-spacing">{{ $post->category->title }}</span>
                                        <h3 class="post-title mt-1"><a
                                                href="{{ route('post', $post->id) }}">{{ $post->title }}</a></h3>
                                        <p>{{ $post->description }}</p>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="m-auto">
                    <div class="pagination mt-5 pt-4">
                        {{ $posts->links('pagination::bootstrap-5') }}
                        {{-- <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" class="active">1</a></li>
                            <li class="list-inline-item"><a href="#">2</a></li>
                            <li class="list-inline-item"><a href="#">3</a></li>
                            <li class="list-inline-item"><a href="#" class="prev-posts"><i
                                        class="ti-arrow-right"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
