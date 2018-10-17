@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Status Product</h3></div>
                    <a href="{{ URL::to('status-products/create') }}" class="btn btn-success" style="margin-top: 5px; margin-left: 10px">Create Status</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($statusProducts as $statusProduct)
                                <tr>
                                    <td>{{$statusProduct->name}}</td>
                                    <td>
                                        <a class="btn btn-small btn-info" href="{{ URL::to('status-products/' . $statusProduct->id . '/edit') }}">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{url('status-products/'.$statusProduct->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{--@foreach ($products as $product)--}}
                        {{--<div class="panel-body">--}}
                            {{--<li style="list-style-type:disc">--}}
                                {{--<a href="{{ route('products.show', $product->id ) }}"><b>{{ $product->name}}</b><br>--}}
                                    {{--<p class="teaser">--}}
                                    {{--{{  str_limit($post->body, 100) }} --}}{{----}}{{-- Limit teaser to 100 characters --}}
                                    {{--</p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                </div>
            </div>
        </div>
    </div>
@endsection
