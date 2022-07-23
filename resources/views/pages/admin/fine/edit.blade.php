@extends('layouts.admin')

@section('header')
    <!-- Page Heading -->

    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-dark d-inline-block mb-0">Fines</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-block ">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.police.all') }}">Fines</a></li>
                    <li class="breadcrumb-item active" aria-current="page">update</li>
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
                    <form method="POST" action="{{ route('admin.fine.update') }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="act">Select of Act</label>
                                <input type="text" value="{{ $fine->act }}" class="form-control" id="act" name="act" required>
                                <input type="hidden" value="{{ $fine->id }}" class="form-control"  name="id">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Offence</label>
                                <input type="text" value="{{ $fine->offence }}" class="form-control"  name="offence" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputLandphone">Amount of Spot Fine</label>
                                <input type="number" value="{{ $fine->amount }}" class="form-control" name="amount" required>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
