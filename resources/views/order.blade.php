@extends('layouts.landing')

@section('content')
<!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{ asset('assets-landing/images/bg/bg1.jpg') }});">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);">
        </div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Order </h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->
<div class="container mt-5">
    
    <div class="row">
        <div class="col-md-12">
           
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Code</th>
                        <th>Ticket</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>E-Ticket</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->code }}</td>
                        <td>{{ $order->ticket->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>
                            @if($order->status == 'accepted')
                            <label class="badge bg-success">Accepted</label>
                            @elseif($order->status == 'rejected')
                            <label class="badge bg-danger">Rejected</label>
                            @else
                            <label class="badge bg-warning">Waiting Confirmation</label>
                            @endif
                        </td>
                        @if($order->status == 'accepted')
                        <td>
                            <a href="{{ route('user.e-ticket', $order->code) }}" class="btn btn-primary">View E-Ticket</a>
                        </td>
                        @else
                        <td>
                            <label class="badge bg-warning">Waiting Confirmation</label>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection