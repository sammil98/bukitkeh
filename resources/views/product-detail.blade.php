@extends('layouts.landing')

@section('content')
<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Detail Produk</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('landing.product') }}">Produk</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends --> 

<!-- top Destination starts -->
<section class="trending pt-6 pb-0 bg-lgrey overflow-hidden">
    <div class="container">
        <div class="single-content">
            <div id="highlight">
                <div class="single-full-title border-b mb-2 pb-2">
                    <div class="single-title text-center">
                        <h2 class="mb-1">{{ $product->name }}</h2>
                        <div class="rating-main">
                            <p class="mb-0 me-2 d-inline-block"><i class="icon-location-pin"></i> Pamekasan, Jawa Timur</p>
                        </div>
                    </div>
                </div>

                <div class="description-images mb-4">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col"><img src="{{ asset('storage/product/' . $product->image) }}" alt="" class="rounded" style="max-height: 300px"></div>
                    </div>
                </div>

                <div class="description mb-2">
                    <h4>Description</h4>
                    {!! $product->description !!}
                </div>
                <div class="description mb-2 text-center">
                    <h4 class="font-weight-bold">Harga</h4>
                    <h2 class="text-success">Rp. {{ number_format($product->price, 0, ',', '.') }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- top Destination ends -->

@endsection