@extends('layouts.agent')

@section('header')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tickets</h1>

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
                                @foreach ($tickets as $key => $ticket)
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalViewForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Ticket View</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('agent.ticket.reply') }}" method="POST">
                    @csrf
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <input type="hidden" class="form-control" id="id" name="id">
                            <textarea class="form-control" id="pro_description" name="pro_description" rows="3" required></textarea>

                            <label data-error="wrong" data-success="right" for="defaultForm-email">Customer Problem
                                Description</label>
                        </div>

                        <div class="md-form mb-4">
                            <textarea class="form-control" id="reply" name="reply" rows="3" required></textarea>

                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your reply</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">

                        <button type="submit" id="submit_btn" class="btn btn-primary">Submit</button>
                    </div>
                </form>
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

        //get ticket details and change read status
        function getTicket(id) {
            $.ajax({
                url: '{{ route('agent.get.ticket') }}',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: id
                },
                success: function(response) {
                    $('#submit_btn').show();
                    $('#pro_description, #reply').prop('readonly', false);
                    $('#pro_description').val(response.pro_description);
                    if (response.status=='2') {
                        $('#reply').val(response.reply);
                        $('#submit_btn').hide();
                        $('#pro_description, #reply').prop('readonly', true);

                    }
                    $('#id').val(id);
                }
            });
        }
    </script>
@endsection
