@extends('layouts.landing')

@section('content')
    
    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-20 pt-14" style="background-image:url({{ asset('assets-landing/images/15.jpg') }})">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Gallery One</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery One</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- Gallery starts -->
    <div class="gallery pt-6 pb-0">
        <div class="container">
            <div class="section-title mb-6 text-center w-75 mx-auto">
                <h4 class="mb-1 theme1">Our Gallery</h4>
                <h2 class="mb-1">Some Beautiful <span class="theme">Snapshoots</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="row">

                @foreach ($image as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <img src="{{ asset('storage/gallery/' . $item->file) }}" alt="image">
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="gallery pt-6 pb-0">
        <div class="container">
            <div class="section-title mb-6 text-center w-75 mx-auto">
                <h4 class="mb-1 theme1">Our Videos</h4>
                <p>Video Gallery</p>
            </div>
            <div class="row">
                @foreach ($vidio as $item)
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <video src="{{ asset('storage/gallery/' . $item->file) }}" alt="video" controls class="w-100"></video>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Gallery Ends -->

@endsection