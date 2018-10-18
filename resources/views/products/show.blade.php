@extends('layouts.app')

@section('title', '| View Post')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>{{ $product->name}}</h1>
                <hr>
                <p class="lead">Price : Rp {{ number_format($product->price,2) }} </p>
                <p class="lead">Stock : {{ $product->stock }} pcs</p>
                <p class="lead">Desc  : {{ $product->description }} </p>
                <p class="lead">Status  : {{ $product->status->name}} </p>
                {{--<p class="lead">{{ $product->status()->name }} </p>--}}
                <hr>
                {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id] ]) !!}
                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                {{--@can('Edit Post')--}}
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info" role="button">Edit</a>
                {{--@endcan--}}
                {{--@can('Delete Post')--}}
                <form action="{{url('products/'.$product->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                </form>
                {{--onclick="return confirm('Are you sure?')"--}}
                {{--@endcan--}}
                {!! Form::close() !!}
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('image/'.$product->image)  }}" style="max-height:300px;max-width:300px;margin-top:10px;">
            </div>
        </div>

    </div>

@endsection
