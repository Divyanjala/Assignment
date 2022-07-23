@extends('layouts.admin')

@section('header')
    <!-- Page Heading -->

    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-dark d-inline-block mb-0">Police Station</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-block ">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.police.all') }}">Police Station</a></li>
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

                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name of the police station</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputProvince">Province</label>
                                <select id="inputProvince" class="form-control" onchange="getDistricts(this.value)" required>
                                    <option selected>Choose...</option>
                                    @foreach ($provinces as $row)
                                        <option value="{{ $row }}">{{ $row }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputDistrict">District</label>
                                <select id="inputDistrict" class="form-control" required>

                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputDivision">Division</label>
                                <input type="text" class="form-control" id="inputDivision" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress"  required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputLandphone">Landphone</label>
                                <input type="number" class="form-control" id="inputLandphone" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Email</label>
                                <input type="text" class="form-control" id="inputCity" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCity">Password</label>
                                <input type="text" class="form-control" id="inputCity" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCity">Repeat Password</label>
                                <input type="text" class="form-control" id="inputCity" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        .view {
            background-color: yellow;
        }
    </style>
@endsection
@section('js')
    <script>
        function getDistricts(pro) {

            $.ajax({
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                },
                url: '/admin/police/district',
                data: {
                    'pro': pro
                },
                dataType: 'json',
                success: function(data) {
                    html='';
                    data.forEach(element => {
                        html+=' <option>'+element+'</option>';
                    });
                    $('#inputDistrict').append(html)
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }
    </script>
@endsection
