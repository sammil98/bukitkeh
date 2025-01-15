@extends('layouts.landing')

@section('style')
    <style>
        .box {
            font-family: 'Poppins', sans-serif;
        }
    </style>
@endsection
@section('content')
    <!-- top Destination starts -->
    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 mb-4">
                    <div class="payment-book">
                        <div class="booking-box">
                            <div class="booking-box-title d-md-flex align-items-center bg-title p-4 mb-4 rounded text-md-start text-center">
                                <i class="fa fa-check px-4 py-3 bg-white rounded title fs-5"></i>
                                @if ($order->status == 'accepted')
                                <div class="title-content ms-md-3">
                                    <h3 class="mb-1 white">{{ $order->ticket->name }}</h3>
                                    <p class="mb-0 white">Thank You. Your booking order is confirmed now.</p>
                                </div>
                                @else
                                    <h3 class="mb-1 white">Your booking order is {{ $order->status }}.</h3>
                                @endif
                            </div>
                            <div class="travellers-info mb-4">
                                <table>
                                    <thead>
                                        <th>Order Number</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="theme2">{{ $order->code }}</td>
                                            <td class="theme2">{{ $order->ticket_date }}</td>
                                            <td class="theme2">Rp. {{ number_format($order->total_price, 0, ',', '.') }}</td>
                                            <td class="theme2">Bank Transfer</td>
                                            <td class="theme2">
                                                @if ($order->status == 'accepted')
                                                    <span class="badge bg-success">{{ $order->status }}</span>
                                                @elseif ($order->status == 'rejected')
                                                    <span class="badge bg-danger">{{ $order->status }}</span>
                                                @else
                                                    <span class="badge bg-warning">{{ $order->status }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="travellers-info mb-4">
                                <h4>Traveler Information</h4>
                                <table>
                                    <tr>
                                        <td>Booking Number</td>
                                        <td>{{ $order->code }}</td>
                                    </tr>
                                    <tr>
                                        <td>First Name</td>
                                        <td>{{ $order->user->name }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Email Address</td>
                                        <td>{{ $order->user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>QR Code</td> <!-- Ubah label dari Barcode menjadi QR Code -->
                                        <td>
                                            @if ($qrcode)
                                            <img src="data:image/png;base64,{{ $qrcode }}" alt="QR Code" style="width: 200px; height: 100px;"/>
                                            @else
                                                <p>QR code tidak tersedia.</p>
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="booking-border mb-4">
                                <h4 class="border-b pb-2 mb-2">Ticket {{ $order->ticket->name }}</h4>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 mb-4 ps-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="sidebar-item bordernone bg-white rounded box-shadow overflow-hidden p-3 mb-4">
                                <h4>Need Booking Help?</h4>
                                <div class="sidebar-module-inner">
                                    <p class="mb-2">Paid was hill sir high 24/7. For him precaution any advantages dissimilar.</p>
                                    <ul class="help-list">
                                        <li class="border-b pb-1 mb-1"><span class="font-weight-bold">Hotline</span>: +475 15 123 21</li>
                                        <li class="border-b pb-1 mb-1"><span class="font-weight-bold">Email</span>: support@Yatriiworld.com</li>
                                        <li><span class="font-weight-bold">Livechat</span>: Yatriiworld (Skype)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item bg-white rounded box-shadow overflow-hidden p-3 mb-4">
                                <h4>Why booking with us?</h4>
                                <div class="sidebar-module-inner">
                                    <ul class="featured-list-sm">
                                        <li class="border-b pb-2 mb-2">
                                            <h6 class="mb-0">No Booking Charges</h6>
                                            We don't charge you an extra fee for booking a hotel room with us
                                        </li>
                                        <li class="border-b pb-2 mb-2">
                                            <h6 class="mb-0">No Cancellation Sees</h6>
                                            We don't charge you a cancellation or modification fee in case plans change
                                        </li>
                                        <li class="border-b pb-2 mb-2">
                                            <h6 class="mb-0">Instant Confirmation</h6>
                                            Instant booking confirmation whether booking online or via the telephone
                                        </li>
                                        <li>
                                            <h6 class="mb-0">Flexible Booking</h6>
                                            You can book up to a whole year in advance or right up until the moment of your stay
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top Destination ends -->

@endsection

