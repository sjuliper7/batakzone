@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Products</h3></div>
                    {{--<div class="panel-heading">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</div>--}}
                    {{-- Loop thru posts --}}
                    @foreach ($products as $product)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('products.show', $product->id ) }}"><b>{{ $product->name}}</b><br>
                                    {{--<p class="teaser">--}}
                                        {{--{{  str_limit($post->body, 100) }} --}}{{-- Limit teaser to 100 characters --}}
                                    {{--</p>--}}
                                </a>
                            </li>
                        </div>
                    @endforeach
                </div>
                {{--<div class="text-center">--}}
                    {{--{!! $products->links() !!}--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection
