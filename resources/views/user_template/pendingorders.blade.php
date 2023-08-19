@extends('user_template.layouts.user_profile_template')
@section('profilecontent')

    <div class="container">
        Pendings Orders
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>

@endsection
