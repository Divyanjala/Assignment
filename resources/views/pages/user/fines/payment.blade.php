@extends('layouts.user')

@section('header')
    <!-- Page Heading -->

    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-dark d-inline-block mb-0">Payment</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-block ">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('police.police-users.list') }}">Fine payment</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New</li>
                </ol>
            </nav>
        </div>

    </div>
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-6 col-md-12 mb-4 ml-auto mr-auto">
            <div class="card border shadow ">
                <div class="card-body">
                    <x-auth-validation-errors style="color: red;" class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('user.fine.pay') }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputDivision">Amount</label>
                                <input type="text" class="form-control" readonly name="amount" value="{{$fine->amount}}">
                                <input type="hidden" class="form-control" readonly name="id" value="{{$fine->id}}">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputAddress">Card Number</label>
                                <input type="number" class="form-control" id="inputAddress" name="card_number" required>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity"><b>Expire Date</b></label>

                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCity">MM</label>
                                <select name="month" class="form-control" id="inputCity" name="expiration_month" required>
                                    @for ($i = 1; $i < 13; $i++)
                                    <option value="1">{{$i}}</option>
                                    @endfor

                                </select>

                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputLandphone">YY</label>
                                <select name="month" class="form-control" id="inputCity" name="expiration_year" required>
                                    @for ($i = 2022; $i < 2044; $i++)
                                    <option value="1">{{$i}}</option>
                                    @endfor

                                </select>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="inputAddress">CV Code</label>
                                <input type="number" class="form-control" maxlength="3" id="inputAddress" name="csv" required>
                            </div>
                            <div class="form-group col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Pay</button>

                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
