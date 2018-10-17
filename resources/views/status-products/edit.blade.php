@extends('layouts.app')

@section('title', '| Create New Post')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Edit Status Product</h1>
            <hr>

            <form action="{{ url('status-products/'.$statusProduct->id) }}" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{$statusProduct->name}}" data-error="Please enter name" required>
                    <div class="help-block with-errors"></div>
                </div>
                <input type="submit" value="Edit Status Product" class="btn btn-success btn-lg btn-block" id="add" style="margin-top: 70px;">
            </form>
        </div>
    </div>

@endsection


