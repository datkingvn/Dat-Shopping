@extends('user_template.layouts.template')
@section('main-content')
    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>{{ $category->category_name }} - ({{ $category->product_count }})</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @foreach($products as $product)
                            <!-- Single Product -->
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{ asset($product->product_img) }}" alt="">
                                    <!-- Favourite -->
                                    <div class="product-favourite">
                                        <a href="{{ route('singleproduct', [$product->id, $product->slug]) }}" class="favme fa fa-eye"></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <span>{{ $product->product_category_name }} - {{ $product->product_subcategory_name }}</span>
                                    <a href="{{ route('singleproduct', [$product->id, $product->slug]) }}">
                                        <h6>{{ $product->product_name }}</h6>
                                    </a>
                                    <p class="product-price">$ {{ $product->price }}</p>

                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- Add to Cart -->
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->
@endsection
