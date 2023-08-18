@extends('user_template.layouts.template')
@section('main-content')

    <div class="container">
    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail">
                <img src="{{asset($product->product_img)}}" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span>{{$product->product_category_name}} - {{$product->product_subcategory_name}}</span>
            <a href="#">
                <h2>{{ $product->product_name }}</h2>
            </a>
            <p class="product-price">$ {{ $product->price }}</p>
            <p class="product-desc">{{ $product->product_long_des }}</p>
            <p class="fw-bold text-danger">Available: {{ $product->quantity }}</p>
            <!-- Cart & Favourite Box -->
            <div class="cart-fav-box d-flex align-items-center">
                <!-- Cart -->
                <form action="{{route('addproducttocart')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$product->id}}" name="product_id">
                    <input type="hidden" value="{{$product->price}}" name="price">
                    <input type="hidden" value="1" name="quantity">
                    <div class="input-group d-flex align-items-center">
                        <label for="product_quantity" class="me-2">Quantity: &ensp;</label>
                        <input id="product_quantity" class="form-control" type="number" min="1" placeholder="1">
                    </div><br>
                    <input class="btn essence-btn" type="submit" value="Add to Cart">
                </form>
            </div>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->
    </div>
@endsection
