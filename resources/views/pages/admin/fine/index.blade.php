@extends('layouts.admin')

@section('header')
    <!-- Page Heading -->
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-dark d-inline-block mb-0">Fines</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-block ">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                    {{-- <li class="breadcrumb-item"><a href="">Start Here</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">Fines</li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-6 text-right">
            <div>
                <a href="{{ route('admin.fine.new') }}"
                    class="btn btn-sm btn-primary float-right mr-3">
                    New Fine
                </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border shadow ">
                <div class="card-body">
                    <div class="table-responsive  py-4">
                        <table class="table" id="tickets_tb">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Selection of Act</th>
                                    <th>Offence</th>
                                    <th>Amount of Spot Fine</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fines as $key => $row)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $row->act }}</td>
                                        <td>{{ $row->offence }}</td>
                                        <td>{{ $row->amount }}</td>
                                        <td>
                                            <div class="dropleft no-arrow mb-1">

                                                <a class="dropdown-item edit-portfolio"
                                                    href="{{ route('admin.fine.edit', ['id'=> $row->id]) }}"
                                                    class="btn btn-warning" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
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
        $(document).ready(function() {
            $('#tickets_tb').dataTable({
                "language": {
                    "emptyTable": "No data available in the table",
                    "paginate": {
                        "previous": '<i class="fas fa-chevron-left text-dark"></i>',
                        "next": '<i class="fas fa-chevron-right text-dark"></i>'
                    },
                    "sEmptyTable": "No data available in the table"
                }

            });
        });

    </script>
@endsection
