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
                    <h1 class="mb-3">Facility List</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Facility Lists</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- top Destination starts -->
    <section class="trending pb-0 pt-6 mb-3">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">Our Facilities</h4>
                <h2 class="mb-1">Explore <span class="theme">Our Facilities</span></h2>
            </div>
            <div class="row align-items-center">
                @foreach ($facility as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item1">
                            <div class="trend-image position-relative rounded">
                                <a href="{{ route('facility.detail', $item->slug) }}">
                                    <div>
                                        <img src="{{ asset('storage/facility/' . $item->image) }}" alt="image"
                                            style="width: 100%; height: 300px; object-fit: cover;">
                                    </div>
                                    <div
                                        class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                        <div class="trend-content-title">
                                            <h5 class="mb-0">
                                                <div class="theme1">{{ $item->name }}</div>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="color-overlay"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- top Destination ends -->
@endsection
