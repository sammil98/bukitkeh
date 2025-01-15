@extends('layouts.landing')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image:url({{ asset('assets-landing/images/17.jpg') }})">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);">
        </div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">News </h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">News</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- blog starts -->
    <section class="blog">
        <div class="container">
            @foreach ($news as $item)
            <div class="blog-full mb-4 border-b bg-white box-shadow p-4 rounded border-all">
                <div class="row">
                    <div class="col-lg-5 col-md-4 blog-height">
                        <div class="blog-image rounded">
                            <a href="{{ route('landing.news.detail', $item->slug) }}" style="background-image: url({{ asset('storage/news/' . $item->image) }});"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8">
                        <div class="blog-content">
                            <h5 class="theme mb-1">Wisata Bukit Kehi Pamekasan</h5>

                            <h3 class="mb-2"><a href="{{ route('landing.news.detail', $item->slug) }}" class="">{{ $item->title }}</a></h3>
                            <p class="date-cats mb-2">
                                <a href="{{ route('landing.news.detail', $item->slug) }}" class="me-2"><i class="fa fa-calendar-alt"></i> {{ $item->created_at->format('d F Y') }}</a>
                                <a href="{{ route('landing.news.detail', $item->slug) }}" class=""><i class="fa fa-user"></i> By {{ $item->author }}</a>
                            </p>
                            <p class="mb-0">{!! Str::words($item->content, 20) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>
    <!-- blog Ends -->
@endsection
