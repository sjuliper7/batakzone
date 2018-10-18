@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{route('products.create')}}" class="btn btn-success" style="margin-bottom: 20px">Create Product</a>
        <div class="row">
            <div class="col-md-auto">

                @foreach($products as $product)
                    <div class="col-sm-2">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('image/'.$product->image)  }}" style="max-width:150px;max-height:150px;margin-bottom: 10px" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="card-text">Rp.{{$product->price}}</p>
                                <a href="{{ route('products.show', $product->id ) }}" class="btn btn-info">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
