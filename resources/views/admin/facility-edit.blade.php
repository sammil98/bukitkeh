@extends('layouts.app')

@section('active_facility', 'active-page')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Edit Facility</h3>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('admin.facility.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Photo Facility</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                                <input type="hidden" name="id" value="{{ $facility->id }}">
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $facility->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control" required>{{ $facility->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
