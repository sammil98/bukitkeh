@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pesanan Ticket</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">Pembelian
                                    Masuk</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Riwayat
                                    Pembelian</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="rejected-tab" data-bs-toggle="tab" data-bs-target="#rejected"
                                    type="button" role="tab" aria-controls="rejected" aria-selected="false">Pembelian
                                    Ditolak</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Harga Satuan</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Status</th>
    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders_pending as $order)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $order->user->name }}</td>
                                                    <td>{{ $order->user->email }}</td>
                                                    <td>Rp. {{ number_format($order->ticket->price) }}</td>
                                                    <td>{{ $order->quantity }}</td>
                                                    <td>Rp. {{ number_format($order->ticket->price * $order->quantity) }}</td>
    
                                                    <td>
                                                        <a href="{{ asset('storage/payment_proof/' . $order->payment_proof) }}"
                                                            target="_blank">
                                                            <img src="{{ asset('storage/payment_proof/' . $order->payment_proof) }}"
                                                                alt=""
                                                                style="object-fit: cover; max-width: 150px; height: 100px;">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        @if ($order->status == 'pending')
                                                            <button type="button" class="btn btn-warning"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalLive{{ $order->id }}">
                                                                {{ $order->status }}
                                                            </button>
                                                        @elseif($order->status == 'accepted')
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalLive{{ $order->id }}">
                                                                {{ $order->status }}
                                                            </button>
                                                        @elseif($order->status == 'rejected')
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalLive{{ $order->id }}">
                                                                {{ $order->status }}
                                                            </button>
                                                        @endif
                                                        <div class="modal fade" id="exampleModalLive{{ $order->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLiveLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLiveLabel">Modal
                                                                            title
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('admin.order.update') }}"
                                                                            method="POST">
                                                                            @csrf
    
                                                                            <div class="form-group">
                                                                                <label for="status">Status</label>
                                                                                <input type="hidden" name="id"
                                                                                    value="{{ $order->id }}">
                                                                                <select name="status" id="status"
                                                                                    class="form-control">
                                                                                    <option value="pending"
                                                                                        {{ $order->status == 'pending' ? 'selected' : '' }}>
                                                                                        Pending</option>
                                                                                    <option value="accepted"
                                                                                        {{ $order->status == 'accepted' ? 'selected' : '' }}>
                                                                                        Accepted</option>
                                                                                    <option value="rejected"
                                                                                        {{ $order->status == 'rejected' ? 'selected' : '' }}>
                                                                                        Rejected</option>
                                                                                </select>
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save
                                                                            changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Harga Satuan</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Status</th>
    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders_success as $order)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $order->user->name }}</td>
                                                    <td>{{ $order->user->email }}</td>
                                                    <td>Rp. {{ number_format($order->ticket->price) }}</td>
                                                    <td>{{ $order->quantity }}</td>
                                                    <td>Rp. {{ number_format($order->ticket->price * $order->quantity) }}</td>
    
                                                    <td>
                                                        <a href="{{ asset('storage/payment_proof/' . $order->payment_proof) }}"
                                                            target="_blank">
                                                            <img src="{{ asset('storage/payment_proof/' . $order->payment_proof) }}"
                                                                alt=""
                                                                style="object-fit: cover; max-width: 150px; height: 100px;">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        @if ($order->status == 'pending')
                                                            <button type="button" class="btn btn-warning"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalLive{{ $order->id }}">
                                                                {{ $order->status }}
                                                            </button>
                                                        @elseif($order->status == 'accepted')
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalLive{{ $order->id }}">
                                                                {{ $order->status }}
                                                            </button>
                                                        @elseif($order->status == 'rejected')
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalLive{{ $order->id }}">
                                                                {{ $order->status }}
                                                            </button>
                                                        @endif
                                                        <div class="modal fade" id="exampleModalLive{{ $order->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLiveLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLiveLabel">Modal
                                                                            title
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('admin.order.update') }}"
                                                                            method="POST">
                                                                            @csrf
    
                                                                            <div class="form-group">
                                                                                <label for="status">Status</label>
                                                                                <input type="hidden" name="id"
                                                                                    value="{{ $order->id }}">
                                                                                <select name="status" id="status"
                                                                                    class="form-control">
                                                                                    <option value="pending"
                                                                                        {{ $order->status == 'pending' ? 'selected' : '' }}>
                                                                                        Pending</option>
                                                                                    <option value="accepted"
                                                                                        {{ $order->status == 'accepted' ? 'selected' : '' }}>
                                                                                        Accepted</option>
                                                                                    <option value="rejected"
                                                                                        {{ $order->status == 'rejected' ? 'selected' : '' }}>
                                                                                        Rejected</option>
                                                                                </select>
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save
                                                                            changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Harga Satuan</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Status</th>
    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders_rejected as $order)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $order->user->name }}</td>
                                                    <td>{{ $order->user->email }}</td>
                                                    <td>Rp. {{ number_format($order->ticket->price) }}</td>
                                                    <td>{{ $order->quantity }}</td>
                                                    <td>Rp. {{ number_format($order->ticket->price * $order->quantity) }}</td>
    
                                                    <td>
                                                        <a href="{{ asset('storage/payment_proof/' . $order->payment_proof) }}"
                                                            target="_blank">
                                                            <img src="{{ asset('storage/payment_proof/' . $order->payment_proof) }}"
                                                                alt=""
                                                                style="object-fit: cover; max-width: 150px; height: 100px;">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        @if ($order->status == 'pending')
                                                            <button type="button" class="btn btn-warning"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalLive{{ $order->id }}">
                                                                {{ $order->status }}
                                                            </button>
                                                        @elseif($order->status == 'accepted')
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalLive{{ $order->id }}">
                                                                {{ $order->status }}
                                                            </button>
                                                        @elseif($order->status == 'rejected')
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalLive{{ $order->id }}">
                                                                {{ $order->status }}
                                                            </button>
                                                        @endif
                                                        <div class="modal fade" id="exampleModalLive{{ $order->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLiveLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLiveLabel">Modal
                                                                            title
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('admin.order.update') }}"
                                                                            method="POST">
                                                                            @csrf
    
                                                                            <div class="form-group">
                                                                                <label for="status">Status</label>
                                                                                <input type="hidden" name="id"
                                                                                    value="{{ $order->id }}">
                                                                                <select name="status" id="status"
                                                                                    class="form-control">
                                                                                    <option value="pending"
                                                                                        {{ $order->status == 'pending' ? 'selected' : '' }}>
                                                                                        Pending</option>
                                                                                    <option value="accepted"
                                                                                        {{ $order->status == 'accepted' ? 'selected' : '' }}>
                                                                                        Accepted</option>
                                                                                    <option value="rejected"
                                                                                        {{ $order->status == 'rejected' ? 'selected' : '' }}>
                                                                                        Rejected</option>
                                                                                </select>
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save
                                                                            changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
