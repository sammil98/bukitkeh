@extends('layouts.app')

@section('active_ticket', 'active-page')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h3>Create Ticket</h3>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('admin.ticket.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Photo Ticket</label>
                            <input type="file" class="form-control" name="photo" required accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">RP</span>
                                </div>
                                <input type="text" class="form-control" name="price" id="price" required oninput="formatRupiah(this)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="editor" cols="30" rows="10" class="form-control" required
                                style="overflow:scroll; max-height:300px"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
