@extends('user_template.layouts.template')
@section('main-content')
<div class="container">
    <div class="row">
        <!-- Left Sidebar -->
        <div class="col-lg-3 col-md-4 bg-dark text-white p-4">
            <ul class="list-unstyled">
                <li class="list-group">
                    <a href="{{ route('userprofile') }}" class="h5 text-primary text-decoration-none">Dashboard</a>
                </li>
                <li class="list-group">
                    <a href="{{ route('pendingorders') }}" class="h5 text-danger text-decoration-none">Pending Orders</a>
                </li>
                <li class="list-group">
                    <a href="{{ route('history') }}" class="h5 text-success text-decoration-none">History</a>
                </li>
                <li class="list-group">
                    <a href="#" class="h5 text-white text-decoration-none">Logout</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9 col-md-8 p-4">
            @yield('profilecontent')
        </div>
    </div>
</div>
@endsection

