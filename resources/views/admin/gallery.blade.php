@extends('layouts.app')

@section('active_gallery', 'active-page')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Gallery</h3>
                <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">Create</a>
                <div class="table-responsive">
                    <table class="table table-borderless" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>File</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($gallery->type == 'image')
                                            <img src="{{ asset('storage/gallery/' . $gallery->file) }}" alt="" style="object-fit: cover; max-width: 150px; height: 100px;">
                                        @else
                                            <video src="{{ asset('storage/gallery/' . $gallery->file) }}" alt="" style="object-fit: cover; max-width: 150px; height: 100px;" controls></video>
                                        @endif
                                    </td>
                                    <td>{{ $gallery->type }}</td>
                                    <td>
                                        <a href="{{ route('admin.gallery.destroy', $gallery->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection