@extends('layouts.user')
@section('title')
    <title>Customer- Service</title>
@endsection
@section('header')
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-md-6 ml-auto mr-auto">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">New ticket</h1>

            </div>
            <div class="card">
                <div class="card-body">
                    <form id="ticketForm" class="tab-wizard wizard-circle wizard clearfix" action="{{ route('customer.ticket.store') }}"
                        method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cus_name">Customer Name</label>
                                    <input type="text" class="form-control" id="cus_name" name="cus_name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cus_name">Phone Number</label>
                                    <input type="number" class="form-control" id="phone_number" name="phone_number"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="agent_id">Select Support agents</label>
                                    <select class="form-control" id="agent_id" name="agent_id" required>
                                        @if ($agents)
                                            @foreach ($agents as $agent)
                                                <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                                            @endforeach
                                        @endif

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pro_description">Problem Description</label>
                                    <textarea class="form-control" id="pro_description" name="pro_description" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 ml-auto mr-auto">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Ticket Details</h1>

            </div>
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cus_name">Reference Number</label>
                                <input type="text" class="form-control" id="ref_number" name="cus_name" required>
                            </div>
                            <button onclick="getTicket()" type="submit" class="btn btn-primary" on>Check</button>
                        </div>
                        <div class="col-md-12">
                            <div id="ticket_details" class="row">

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
    <script>

        //get ticket details and change read status
        function getTicket() {
            code = $('#ref_number').val();
            if (code=='') {
                $('#ticket_details').html('<label style="color:red;" class="mt-4">Please enter the reference number</label>');
                return false;
            }
            html = '';
            $.ajax({
                url: '{{ route('user.get.ticket') }}',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    code: code
                },
                success: function(response) {
                    if (response=='false') {
                        $('#ticket_details').html('<label style="color:red;" class="mt-4">Invalid reference number</label>');
                    } else {
                        status='PENDING';
                        switch (response.status) {
                            case 0:
                                status='PENDING';
                                break;
                            case 2:
                                status='REPLIED';
                                break;
                            default:
                                break;
                        }
                        html += '<div class="col-md-12 mt-4">'
                        html += '       <span class="label label-primary">Status : '+status+'</span>'

                        html += '   </div>'
                        html += '<div class="col-md-6 mt-4">'
                        html += '       <label for="">Name</label>'
                        html += '       <input type="text" readonly class="form-control" id="ref_name" value="'+response.cus_name+'">'
                        html += '   </div>'
                        html += '  <div class="col-md-6 mt-4">'
                        html += '      <label for="">Email</label>'
                        html += '      <input type="text" readonly class="form-control" id="ref_email" value="'+response.email+'">'
                        html += '  </div>'
                        html += ' <div class="col-md-6 mt-4">'
                        html += '     <label for="">Problem Description</label>'
                        html += '    <textarea readonly class="form-control" id="pro_description" rows="6" >'+response.pro_description+'</textarea>'
                        html += '   </div>'
                        html += '  <div class="col-md-6 mt-4">'
                        html += '     <label for="">Reply Description</label>'
                        html += '     <textarea readonly class="form-control" id="reply" rows="6" >'+response.reply+'</textarea>'
                        html += ' </div>'
                        $('#ticket_details').html(html);
                    }

                }

            });
        }
    </script>
@endsection
