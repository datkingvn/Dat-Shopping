<!-- Tệp giao diện (template) -->

@extends('admin.layouts.template')

<!-- Phần Title trang -->
@section('page_title')
Admin - All Sub Category
@endsection
<!-- End title trang -->

<!-- Phần nội dung -->

@section('content')

<div class="container">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Sub Category</h4>

              <!-- Bordered Table -->
              <div class="card">
                <h5 class="card-header">Available Sub Category Information</h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Sub Category Name</th>
                          <th>Category</th>
                          <th>Products</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <td>1</td>
                        <td>Fan</td>
                        <td>Electronics</td>
                        <td>100</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
              </div>
</div>

<!-- Kết thúc khối content -->

@endsection
