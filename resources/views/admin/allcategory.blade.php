<!-- Tệp giao diện (template) -->

@extends('admin.layouts.template')

<!-- Phần Title trang -->
@section('page_title')
    Admin - All Category
@endsection
<!-- End title trang -->

<!-- Phần nội dung -->

@section('content')

    <div class="container">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Category</h4>

            <!-- Bordered Table -->
            <div class="card">
                <h5 class="card-header">Available Category Information</h5>
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
                                <th>Category Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--  mỗi phần tử trong mảng $categories được gán cho biến $category trong mỗi lần lặp--}}
                            @foreach($categories as $category)

                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>
                                        <a href="{{ route('editcategory', $category->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('deletecategory', $category->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kết thúc khối content -->

@endsection
