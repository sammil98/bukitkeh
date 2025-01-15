@extends('layouts.app')

@section('active_aparatur', 'active-page')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Edit Aparatur</h3>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('admin.aparatur.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $aparatur->id }}">
                            <div class="form-group mb-3">
                                <label for="">Photo Aparatur</label>
                                <input type="file" class="form-control" name="image" accept="image/*" >
                                
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" required value="{{ $aparatur->name }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Position</label>
                                <input type="text" class="form-control" name="position" required value="{{ $aparatur->position }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
