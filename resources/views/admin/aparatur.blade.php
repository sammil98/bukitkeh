@extends('layouts.app')

@section('active_aparatur', 'active-page')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Aparatur</h3>
                <a href="{{ route('admin.aparatur.create') }}" class="btn btn-primary">Create</a>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aparaturs as $aparatur)
                                <tr class="align-middle" style="">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/aparatur/' . $aparatur->image) }}" alt="" style="object-fit: cover; max-width: 150px; height: 100px;">
                                    </td>
                                    <td>{{ $aparatur->name }}</td>
                                    <td>{{ $aparatur->position }}</td>
                                    <td>
                                        <a href="{{ route('admin.aparatur.edit', $aparatur->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.aparatur.destroy', $aparatur->id) }}" class="btn btn-danger">Delete</a>
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