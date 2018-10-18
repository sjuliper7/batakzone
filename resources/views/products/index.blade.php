@extends('layouts.app')
@section('content')
    <div class="container flex-column">
        <a href="{{route('products.create')}}" class="btn btn-success" style="margin-bottom: 20px">Create Product</a>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-2" >
                    <div class="card" style="width: 18rem; box-shadow: rgb(206, 206, 206) 0px 2px 4px 2px; border-radius: 3px; padding: 1em" >
                        <img class="card-img-top" src="{{ asset('image/'.$product->image)  }}" style="width:150px;height:150px;margin-bottom: 10px; object-fit: cover;" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{$product->name}}</h4>
                            <p class="card-text" style="text-align: center; font-weight:800; font-size: large; color: #262323 " >Rp.{{$product->price}}</p>
                            <a href="{{ route('products.show', $product->id ) }}" class="btn btn-info btn-block">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
