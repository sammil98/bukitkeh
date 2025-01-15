@extends('layouts.app')

@section('active_aparatur', 'active-page')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Create Aparatur</h3>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('admin.aparatur.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Photo Aparatur</label>
                                <input type="file" class="form-control" name="image" required accept="image/*">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Position</label>
                                <input type="text" class="form-control" name="position" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
