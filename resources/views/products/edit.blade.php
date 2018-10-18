@extends('layouts.app')

@section('title', '| Create New Post')

@section('content')

    <div class="container">
        <div class="row">
            <h2>Create Product</h2>
            <hr>
            <form action="{{ url('products/'.$product->id) }}" method="post" id="myForm" data-toggle="validator" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="col-sm-7">
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
                        <label>Status Product</label>
                        <select name="status-select" id="select-status" class="selectpicker form-control" data-live-search="true" data-error="Please select user" required>
                            @foreach($statusProducts as $statusProduct)
                                @if($statusProduct->id == $product->id_status)
                                    <option value="{{$statusProduct->id}}" selected>{{$statusProduct->name}}</option>
                                @endif
                                <option value="{{$statusProduct->id}}">{{$statusProduct->name}}</option>
                            @endforeach

                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div style="float: right;margin-bottom: 20px">
                        <a href="{{ url()->previous() }}" class="btn btn-danger" style="margin-top: 10px;">Cancel</a>
                        <input type="submit" value="Create Product" class="btn btn-info " id="add" style="margin-top: 10px;">
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="form-group">
                        <img src="{{ asset('image/'.$product->image)  }}" id="show_image" style="max-width:300px;max-height:300px; margin-top: 25px" class="center-block" />
                    </div>

                    <div class="form-group">
                        <label class="btn btn-info center-block" style="margin-top: 5px; margin-left: 30px; margin-right: 30px">
                            Browse
                            <input type="file" id="input_image" name="image" style="display: none">
                        </label>
                    </div>

                </div>

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

        });

    </script>
@endsection


