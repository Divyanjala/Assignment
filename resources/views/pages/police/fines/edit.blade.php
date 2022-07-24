@extends('layouts.police')

@section('header')
    <!-- Page Heading -->

    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-dark d-inline-block mb-0">User Fine</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-block ">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('police.police-users.list') }}">User Fine</a></li>
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
                    <form method="POST" action="{{ route('police.fine.update') }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputDivision">Licence Number</label>
                                <input type="text" class="form-control"
                                value="{{ $fine->licence_number }}"  name="licence_number" required>
                                <input type="hidden" class="form-control"
                                value="{{ $fine->id }}"  name="id" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputAddress">Fine</label>
                                <select id="inputProvince" class="form-control" name="fine_id" required>

                                    @foreach ($fines as $row)
                                        <option value="{{ $row->id }}" {{ $row->id==$fine->fine_id?'selected':''}}>
                                            {{ $row->offence}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputDivision">Date</label>
                                <input type="date" class="form-control"
                                value="{{ $fine->date }}" name="date" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Policemen</label>
                                <select id="inputProvince" class="form-control" name="police_id" required>

                                    @foreach ($police as $row)
                                        <option value="{{ $row->id }}" {{ $row->id==$fine->police_user_id?'selected':''}}>
                                            {{ $row->code}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
