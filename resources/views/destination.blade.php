@extends('layouts.landing')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14"
        style="background-image: url({{ asset('assets-landing/images/bg/bg1.jpg') }});">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url({{ asset('assets-landing/images/shape8.png') }});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Destination List</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Destination Lists</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- top Destination starts -->
    <section class="trending pb-0 pt-6">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">Top Destinations</h4>
                <h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="row align-items-center">
                @foreach ($destination as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item1">
                            <div class="trend-image position-relative rounded">
                                <a href="{{ route('destination.detail', $item->slug) }}"><img src="{{ asset('storage/destination/' . $item->image) }}" alt="image" style="width: 100%; height: 300px; object-fit: cover;"></a>
                                <div
                                    class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                    <div class="trend-content-title">
                                        <h5 class="mb-0"><a href="{{ route('destination.detail', $item->slug) }}" class="theme1">{{ $item->name }}</a></h5>
                                        <h3 class="mb-0 white"><a href="{{ route('destination.detail', $item->slug) }}" style="color: white"> {{ $item->name }}</a></h3>
                                    </div>
                                </div>
                                <div class="color-overlay"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- top Destination ends -->
@endsection
