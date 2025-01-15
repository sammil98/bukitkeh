@extends('layouts.app')

@section('active_destination', 'active-page')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Create Gallery</h3>
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="">File Gallery</label>
                                    <input type="file" class="form-control" name="file" required
                                        accept="image/*,video/*">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
