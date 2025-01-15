@extends('layouts.app')

@section('active_product', 'active-page')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Edit Product</h3>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('admin.product.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Photo Product</label>
                                <input type="file" class="form-control" name="image" required accept="image/*">
                                <input type="hidden" name="id" value="{{ $product->id }}">
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" required value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" class="form-control" name="price" required value="{{ $product->price }}">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="draft" {{ $product->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="publish" {{ $product->status == 'publish' ? 'selected' : '' }}>Publish</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="editor" cols="30" rows="10" class="form-control" required style="overflow:scroll; max-height:300px">{{ $product->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection