@extends('layouts.landing')

@section('content')
    
    <!-- Breadcrumb -->
    <div class="page-cover pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <div class="cover-content text-center text-md-start">
                        <div class="author-detail mb-2">
                            <a href="{{ route('landing.news') }}" class="tag white bg-theme py-1 px-3 me-2 rounded">#News&Artikel</a>
                        </div>
                        <h1>{{ $news->title }}</h1>
                        <div class="author-detail d-flex align-items-center">
                            <span class="me-3"><a href="post-list-1.html"><i class="fa fa-clock"></i> Posted On : {{ $news->created_at->format('d F Y') }}</a></span>
                            <span class="me-3"><a href="post-list-1.html"><i class="fa fa-user"></i> {{ $news->author }}</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="box-shadow p-3 rounded"><img src="{{ asset('storage/news/' . $news->image) }}" alt="Image" class="w-100 rounded"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Ends -->

    <!-- blog starts -->
    <section class="blog pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-single">

                        <div class="blog-wrapper">

                            <div class="blog-content first-child-cap mb-4">
                                {!! $news->content !!}
                                
                                @if ($news->video)
                                    <video src="{{ asset('storage/news/' . $news->video) }}" class="rounded" style="width: 100%; height: 100%; object-fit: cover;" controls></video>
                                @endif
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->  

@endsection