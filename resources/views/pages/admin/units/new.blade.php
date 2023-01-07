@extends('layouts.admin')
@section('header')
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Units/Workshop New</h1>

</div>
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.units.store') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="user_role"><b>Factory</b></label>
                                    <select class="form-control" id="factory" name="factory">
                                        <option value="0">Factory 1</option>
                                        <option value="1">Factory 2 </option>
                                        <option value="2">Factory 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email"><b>Department</b></label>
                                    <select class="form-control" id="department_id" name="department_id">
                                        @foreach ($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}} - {{$department->code}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email"><b>Unit name</b></label>
                                    <input type="text" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Unit Name" name="name">

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email"><b>Space Qty</b></label>
                                    <input type="number" class="form-control form-control-user"
                                    id="exampleInputPassword" name="space">

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <h6 class="text-center responsive-moblile">
                                        <button id="submit-btn" type="submit" class="btn btn-primary di">
                                            Save Unit
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
