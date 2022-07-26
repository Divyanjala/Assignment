@extends('layouts.user')

@section('header')
    <!-- Page Heading -->

    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-dark d-inline-block mb-0">Medical Records</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-block ">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('police.police-users.list') }}">Medical Records</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New</li>
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
                    <form method="POST" action="{{ route('user.medical.create') }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputDivision">Date of Birth</label>
                                <input type="date" class="form-control"  name="birthday">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="hight">Hight</label>
                                <input type="text" class="form-control"
                                name="hight" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="weight">Weight</label>
                                <input type="text" class="form-control"
                                name="weight" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="blood_pressure">Blood Pressure</label>
                                <input type="text" class="form-control"
                                name="blood_pressure" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="cholestreol">Cholestreol</label>
                                <input type="text" class="form-control"
                                name="cholestreol" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="blood_type">Blood Type</label>
                                <input type="text" class="form-control"
                                name="blood_type" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="mr_status">Marital status</label>
                                <input type="text" class="form-control"
                                name="mr_status" required>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="address">Address</label>
                                <input type="text" class="form-control"
                                name="address" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label ><b> case of Emergancy</b></label>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="em_name">Name</label>
                                <input type="text" class="form-control"
                                name="em_name" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="em_phone">Phone</label>
                                <input type="text" class="form-control"
                                name="em_phone" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="em_address">Address</label>
                                <input type="text" class="form-control"
                                name="em_address" required>
                            </div>
                        </div>

                        <button id="btn_submit" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

