@extends('layouts.landing')
@section('content')
        <!-- BreadCrumb Starts -->  
        <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
            <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
            <div class="breadcrumb-outer">
                <div class="container">
                    <div class="breadcrumb-content text-center">
                        <h1 class="mb-3">Cart</h1>
                        <nav aria-label="breadcrumb" class="d-block">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="dot-overlay"></div>
        </section>
        <!-- BreadCrumb Ends --> 

        <!-- Cart starts -->
        <section class="cart-main pt-6 pb-60">
            <div class="container">
                <h2 class="mb-4">Your Shopping Cart</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example item -->
                        @foreach ($carts as $cart)
                        <tr>
                            <td>{{ $cart->ticket->name }}</td>
                            <td>Rp. {{ number_format($cart->ticket->price, 0, ',', '.') }}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>Rp. {{ number_format($cart->ticket->price * $cart->quantity, 0, ',', '.') }}</td>
                            <td>
                               <a href="{{ route('cart.destroy', $cart->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Add more items as needed -->
                    </tbody>
                </table>
                <div class="cart-total">
                    <h3>Total: Rp. {{ number_format($total, 0, ',', '.') }}</h3>
                    <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
                </div>
            </div>
        </section>
        <!-- Cart Ends -->

@endsection