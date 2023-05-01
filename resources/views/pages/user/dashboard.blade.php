@extends('layouts.user')
@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1>Welcome To The <span>AQUASCAPE</span></h1>

    </div>
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-10 col-md-10 mb-4">

                    <img src="{{ asset('img/Everything-you-should-know-about-Low-tech-planted-aquarium.jpg') }}" alt="">

        </div>
    </div>
@endsection
