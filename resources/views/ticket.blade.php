@extends('layouts.landing')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main pb-20 pt-14" style="background-image:url({{ asset('assets-landing/images/18.jpg') }})">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);">
    </div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Harga Dan Pemesanan Ticket</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ticket</li>
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
            <div class="col-lg-12">
                <div class="destination-list">
                    @foreach ($tickets as $ticket)
                    <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                        <div class="row">
                            <div class="col-lg-4 col-md-3">
                                <div class="trend-item2 rounded">
                                    <a href="tour-single.html"
                                        style="background-image: url({{ asset('storage/ticket/' . $ticket->photo) }});"></a>
                                    <div class="color-overlay"></div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="trend-content position-relative text-md-start text-center">
                                    <small>Paket Tiket </small>
                                    <h3 class="mb-1"><a href="{{ route('ticket.show', $ticket->id) }}">{{ $ticket->name }}</a></h3>
                                    <h6 class="theme mb-0"><i class="icon-location-pin"></i> Pamekasan, Jawa Timur</h6>
                                    <p class="mt-4 mb-0">{!! Str::limit($ticket->description, 20) !!}</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="trend-content text-md-end text-center">
                                    <div class="trend-price my-2">
                                        <span class="mb-0">From</span>
                                        <h3 class="mb-0">Rp. {{ number_format($ticket->price, 0, ',', '.') }}</h3>
                                        <small>Per Adult</small>
                                    </div>
                                    <a href="{{ route('checkout', $ticket->id) }}" class="nir-btn">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- top Destination ends -->

@endsection