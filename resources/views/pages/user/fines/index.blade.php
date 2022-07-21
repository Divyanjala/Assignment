@extends('layouts.user')

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
                                    <th>Contact ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Reference Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($tickets as $key => $ticket)
                                    <tr class="{{ $ticket->open_status == 0 ? 'view' : '' }}">
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $ticket->cus_name }}</td>
                                        <td>{{ $ticket->email }}</td>
                                        <td>
                                            <strong>{{ $ticket->phone_number }}</strong>
                                        </td>
                                        <td>
                                            <strong>{{ $ticket->ref_number }}</strong>
                                        </td>
                                        <td>
                                            <div class="dropleft no-arrow mb-1">

                                                <a class="dropdown-item edit-portfolio" data-toggle="modal"
                                                    data-target="#modalViewForm" onclick="getTicket({{ $ticket->id }})"
                                                    class="btn btn-warning" title="View">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach --}}
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
