<!-- Tệp giao diện (template) -->

@extends('admin.layouts.template')

<!-- Phần Title trang -->
@section('page_title')
Admin - All Products
@endsection
<!-- End title trang -->

<!-- Phần nội dung -->

@section('content')

<div class="container">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Product</h4>

              <!-- Bordered Table -->
              <div class="card">
                <h5 class="card-header">Available All Products Information</h5>
                  @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Product Name</th>
                          <th>Images</th>
                          <th>Price</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                        @foreach($products as $product)
                            <tbody>
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>
                                    <img src="{{ asset($product->product_img) }}" style="height : 100px;" alt="">
                                    <br>
                                    <a href="{{ route('editproductimg', $product->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="{{ route('editproduct', $product->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('deteleproduct', $product->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                  </div>
                </div>
                </div>
              </div>
</div>

<!-- Kết thúc khối content -->

@endsection
