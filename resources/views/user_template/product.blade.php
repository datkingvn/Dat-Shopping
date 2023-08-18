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
                <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
            </div>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->
    </div>
@endsection
