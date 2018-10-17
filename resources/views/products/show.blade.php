@extends('layouts.app')

@section('title', '| View Post')

@section('content')

    <div class="container">

        <h1>{{ $product->name}}</h1>
        <hr>
        <p class="lead">{{ $product->price }} </p>
        <p class="lead">{{ $product->stock }} </p>
        <p class="lead">{{ $product->description }} </p>
        <img src="{{ asset('image/'.$product->image)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
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

@endsection
