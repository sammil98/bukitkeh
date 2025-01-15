@extends('layouts.landing')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14"
        style="background-image: url({{ asset('storage/destination/' . $destination->image) }});" style="object-fit: cover">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);">
        </div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">{{ $destination->name }}</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Destination Detail</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- top Destination starts -->
    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                        <div id="highlight" class="mb-4">
                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <h2 class="mb-1">{{ $destination->name }}</h2>
                                    <div class="rating-main d-flex align-items-center">
                                        <p class="mb-0 me-2"><i class="icon-location-pin"></i> Kabupaten Pamekasan, Jawa
                                            Timur </p>
                                    </div>
                                </div>
                            </div>
                            <div class="description mb-2">
                                <h4>Sekilas</h4>
                                {{ $destination->short_description }}
                            </div>
                            <div class="description-images mb-4">
                                <img src="{{ asset('storage/destination/' . $destination->image) }}" alt=""
                                    class="w-100 rounded">
                            </div>

                            <div class="description mb-2">
                                <h4>Description</h4>
                                {!! $destination->content !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- sidebar starts -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">

                            <div class="sidebar-item mb-4">
                                <h4 class="">All Menu</h4>
                                <ul class="sidebar-category">
                                    <li class="active"><a href="{{ route('landing.destination') }}">Destinasi</a></li>
                                    <li><a href="{{ route('landing.gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('landing.product') }}">Product</a></li>
                                    <li><a href="{{ route('landing.facility') }}">Facility</a></li>
                                    <li><a href="{{ route('landing.news') }}">Artikel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top Destination ends -->

    <!-- Discount action starts -->
    <section class="discount-action pt-0"
        style="background-image:url(images/section-bg1.png); background-position:center; background-size: cover;">
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h5 class="mb-1 theme">Love Where You're Going</h5>
                            <h2><a href="{{ route('destination.detail', $destination->slug) }}">Explore Your Life, <span
                                        class="theme1"> {{ $destination->name }} </span></a></h2>
                            <p>{{ $destination->short_description }}</p>
                        </div>
                        <div class="video-button text-center position-relative">
                            <div class="video-figure">
                                <video src="{{ asset('storage/destination/' . $destination->video) }}"
                                    class="w-100 rounded" controls></video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
        <div class="white-overlay"></div>
        <div class="section-shape  top-inherit bottom-0" style="background-image: url(images/shape6.png);"></div>
    </section>
    <!-- Discount action Ends -->
@endsection
