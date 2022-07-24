@extends('layouts.police')

@section('header')
    <!-- Page Heading -->

    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-dark d-inline-block mb-0">Police User</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-block ">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('police.police-users.list') }}">Police User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>

    </div>
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border shadow ">
                <div class="card-body">
                    <x-auth-validation-errors style="color: red;" class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('police.public-users.update') }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputDivision">Full Name</label>
                                <input type="text" class="form-control" id="inputDivision"
                                name="name" required value="{{ $police->name }}">
                                <input type="hidden" class="form-control" id="inputDivision"
                                name="id" required value="{{ $police->id }}">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress"
                                value="{{ $police->address }}" name="address" required>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputCity">NIC number</label>
                                <input type="text" class="form-control" id="inputCity"
                                value="{{ $police->nic }}" readonly name="nic" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputLandphone">Mobile</label>
                                <input type="number" class="form-control" id="inputLandphone"
                                value="{{ $police->mobile }}" name="mobile" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
