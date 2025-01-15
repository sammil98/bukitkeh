@extends('layouts.landing')
@section('content')
        <!-- BreadCrumb Starts -->  
        <section class="breadcrumb-main pb-20 pt-14" style="background-image:url({{ asset('assets-landing/images/16.jpg') }})">
            <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
            <div class="breadcrumb-outer">
                <div class="container">
                    <div class="breadcrumb-content text-center">
                        <h1 class="mb-3">Produk Kami</h1>
                        <nav aria-label="breadcrumb" class="d-block">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Produk Kami</li>
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
                    @foreach ($product as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="trend-item rounded box-shadow">
                            <div class="trend-image position-relative">
                                <img src="{{ asset('storage/product/' . $item->image) }}" alt="image" class="" style="width: 100%; height: 200px; object-fit: cover;">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-sale"></i>
                                        <span class="fw-bold">Sale</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Produk</h5>
                                <h3 class="mb-1"><a href="{{ route('product.show', $item->slug) }}">{{ $item->name }}</a></h3>
                                <p class="border-b pb-2 mb-2">{!! Str::words($item->description, 10) !!}</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> Rp. {{ number_format($item->price) }}</span> | Pcs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- top Destination ends -->
    
@endsection