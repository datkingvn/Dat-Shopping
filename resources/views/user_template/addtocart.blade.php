@extends('user_template.layouts.template')
@section('main-content')
    <div class="container">
        <h2>Add to Cart Page</h2>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($cart_items as $item)
                        <tbody>
                        @php
                            $product_name = App\Models\Product::where('id', $item->product_id)->value('product_name');
                            $product_img = App\Models\Product::where('id', $item->product_id)->value('product_img');
                        @endphp
                            <th>{{$product_name}}</th>
                            <th><img src="{{asset($product_img)}}" style="height: 50px" alt=""></th>
                            <th>{{$item->quantity}}</th>
                            <th>{{$item->price}}</th>
                            <th><a href="" class="btn btn-warning">Remove</th>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
