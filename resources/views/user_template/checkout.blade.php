@extends('user_template.layouts.template')
@section('main-content')
    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Billing Address</h5>
                        </div>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">TOWN/CITY NAME <span>*</span></label>
                                    <input type="text" class="form-control" value="{{$shipping_address->city_name}}" disabled>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="company">Postal Code</label>
                                    <input type="text" class="form-control" value="{{$shipping_address->postal_code}}" disabled>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="first_name">Phone Number <span>*</span></label>
                                    <input type="text" class="form-control" value="{{$shipping_address->phone_number}}" disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div>

                        @php
                            $total = 0;
                        @endphp

                        <ul class="order-details-form mb-4">
                            <li><span>Product</span> <span>Total</span></li>
                            @foreach($cart_items as $item)
                                @php
                                    $product_name = App\Models\Product::where('id', $item->product_id)->value('product_name');
                                    $product_img = App\Models\Product::where('id', $item->product_id)->value('product_img');
                                    $total = $total + $item->price;
                                @endphp
                                <li><span>{{$product_name}}</span> <span>$ {{$item->price}}</span></li>
                            @endforeach
                            <li><span>Total: </span> <span class="fw-bold text-danger">$ {{$total}}</span></li>
                        </ul>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <form action="{{route('placeorder')}}" method="POST">
                                @csrf
                                <input class="btn btn-success me-md-2" type="submit" value="Place Order">
                            </form>&ensp;
                            <form action="" method="POST">
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Cancel Order">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->
@endsection
