<!-- Tệp giao diện (template) -->

@extends('admin.layouts.template')

<!-- Phần Title trang -->
@section('page_title')
Admin - Pending Orders
@endsection
<!-- End title trang -->

@section('content')

    <div class="container my-5">
        <div class="card p-4">
            <div class="text-center">Pending Orders</div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>User ID</th>
                        <th>Shipping Information</th>
                        <th>Product ID</th>
                        <th>Quantity</th>
                        <th>Total Pay</th>
                        <th>Action</th>
                    </tr>

                    @foreach($pending_orders as $order)
                        <tr>
                            <td>{{$order->userid}}</td>
                            <td>
                                <ul>
                                    <li>Phone Number - {{$order->shipping_phoneNumber}}</li>
                                    <li>City - {{$order->shipping_city}}</li>
                                    <li>Postal Code - {{$order->shipping_postalcode}}</li>
                                </ul>
                            </td>
                            <td>{{$order->product_id}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->total_price}}</td>
                            <td><a href="" class="btn btn-success">Approve Now</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- Phần nội dung -->

<!-- Kết thúc khối content -->

@endsection
