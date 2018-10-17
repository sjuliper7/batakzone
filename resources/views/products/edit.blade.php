@extends('layouts.app')

@section('title', '| Create New Post')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Create New Product</h1>
            <hr>

            <form action="/products.update" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}" data-error="Please enter name" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control" value="{{$product->price}}" data-error="Please enter price" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="text" name="stock" class="form-control" value="{{$product->stock}}" data-error="Please enter stock" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4"  data-error="Please enter description"  required>{{$product->description}}</textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <img src="{{ asset('image/'.$product->image)  }}" id="show_image" style="max-width:200px;max-height:200px;float:left;" />
                </div>

                <div class="form-group" style="margin-left: 120px">
                    <label>Image</label>
                    <input type="file" id="input_image" name="image" data-error="Please enter Image">
                    <div class="help-block with-errors"></div>
                </div>

                <input type="submit" value="Create Product" class="btn btn-success btn-lg btn-block" id="add" style="margin-top: 70px;">
            </form>
        </div>
    </div>

    <script type="text/javascript">

        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#show_image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $("#input_image").change(function () {
                // console.log("test")
                readURL(this);
            });
        })

    </script>
@endsection


