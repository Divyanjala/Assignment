@extends('layouts.police')

@section('header')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">List Of Fines</h1>

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
                                    <th>Licence Number</th>
                                    <th>fine</th>
                                    <th>Policemen</th>
                                    <th>Amount</th>
                                    <th>Created date</th>
                                    <th>Expire date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fines as $key => $row)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $row->licence_number }}</td>
                                    <td>{{ $row->fine->offence }}</td>
                                    <td>{{ $row->police->name }}</td>
                                    <td>{{ $row->amount }}</td>
                                    <td>{{ $row->date }}</td>
                                    <td>{{ $row->expire_date }}</td>
                                    <td>
                                        @switch($row->status)
                                            @case(0)
                                            <span class="badge badge-primary">PENDING</span>
                                                @break
                                            @case(1)
                                            <span class="badge badge-success">PAID</span>
                                                @break
                                            @case(2)
                                            <span class="badge badge-danger">EXPIRED</span>
                                                @break
                                            @default

                                        @endswitch
                                    </td>
                                    <td>
                                        <div class="dropleft no-arrow mb-1">
                                            @if ($row->status==0)
                                            <a class="dropdown-item edit-portfolio"
                                            href="{{ route('police.fine.edit', ['id'=> $row->id]) }}"
                                                class="btn btn-warning" title="View">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            @endif

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
