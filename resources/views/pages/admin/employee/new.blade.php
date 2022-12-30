@extends('layouts.admin')
@section('header')
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Employee</h1>

</div>
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.employee.store') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="first_name"><b>Full Name</b></label>
                                    <input type="text" class="form-control form-control-alternative" name="name"
                                        id="inp_firstname" aria-describedby="helpId" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="email"><b>Telephone</b></label>
                                    <input type="text" class="form-control form-control-alternative" name="tel"
                                        id="tel"  aria-describedby="helpId"
                                        placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email"><b>Email</b></label>
                                    <input type="text" class="form-control form-control-alternative" name="email"
                                        id="inp_email" onkeyup="validateEmail();" aria-describedby="helpId"
                                        placeholder="" required>
                                    <span class="invalid-feedback" id="email_msg"></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="unit_id"><b>Unit</b></label>
                                    <select class="form-control" id="unit_id" name="unit_id">
                                      @foreach ($units as $unit)
                                      <option value="{{$unit->id}}">{{$unit->name}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="level"><b>Employee Role</b></label>
                                    <select class="form-control" id="level" name="level">
                                        <option value="1">Role 1</option>
                                        <option value="2">Role 2</option>
                                        <option value="3">Role 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="email"><b>Address</b></label>
                                    <textarea name="address"  class="form-control form-control-alternative"
                                    cols="30" rows="3" required></textarea>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <h6 class="text-center responsive-moblile">
                                        <button id="submit-btn" type="submit" class="btn btn-primary di"
                                            onmouseover="validateEmail()">
                                            Save Customer
                                        </button>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('#submit-btn').prop('disabled', true);

    });

    var email_valid = false;

    function validateEmail() {
        $.ajax({
            url: "{{ route('admin.validate-email') }}?email=" + $('#inp_email').val(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            success: function (response) {

                if (response == true) {
                    $('#inp_email').addClass("is-valid").removeClass("is-invalid");
                    $('#submit-btn').prop('disabled', false);
                    email_valid = true;
                } else {
                    $('#inp_email').addClass("is-invalid").removeClass("is-valid");
                    $('#email_msg').html(
                        "<strong>The email is already exists. Please use a different email</strong>"
                    ).css('color', 'red');
                    $('#submit-btn').prop('disabled', true);
                    email_valid = false;
                }
            }
        });
    }

    function validsubmit() {
        if (!$('#inp_email').val()) {
            $('#inp_email').addClass("is-invalid").removeClass("is-valid");
            $('#email_msg').html("<strong class='text-danger'>Email is required</strong>");
            email_valid = false;
        }
        if (conf_password_valid === true && email_valid === true) {
            $('#submit-btn').prop('disabled', false);
        } else {
            $('#submit-btn').prop('disabled', true);
        }
    }

</script>

@endsection
