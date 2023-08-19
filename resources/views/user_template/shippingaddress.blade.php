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

                        <form action="{{route('addshippingaddress')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Phone Number <span>*</span></label>
                                    <input type="text" class="form-control" name="phone_number">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="city_name">Town/City Name<span>*</span></label>
                                    <input type="text" class="form-control" name="city_name">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="postal_code">Postal Code <span>*</span></label>
                                    <input type="text" class="form-control" name="postal_code">
                                </div>

                            </div>

                            <input type="submit" VALUE="Next" class="btn essence-btn">
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Attention!</h5>
                            <p>Note</p>
                        </div>
                        <p>Please write your address. And Click Next then.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->
@endsection
