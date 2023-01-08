@extends('layouts.admin')
@section('header')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">TASK</h1>

    </div>
@endsection

@section('content')
    <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="task_name"><b>Task name</b></label>
                                        <input type="text" class="form-control form-control-alternative" name="task_name"
                                            value="{{$task->task_name}}">

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="task_name"><b>Task Code</b></label>
                                        <input type="text" class="form-control form-control-alternative" name="task_name"
                                        value="{{$task->task_code}}">

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="ast_time"><b>Estimation Time(hours)</b></label>
                                        <input type="number" class="form-control form-control-alternative" name="ast_time"
                                        value="{{$task->ast_time}}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="ast_time"><b>Wast Time (hourse)</b></label>
                                        <input type="number" class="form-control form-control-alternative" name="ast_time"
                                        value="{{$task->spd_time}}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="ast_time"><b>Status</b></label>
                                        <br>
                                        @switch($task->task_status)
                                        @case(0)
                                            <span class="badge badge-pill badge-danger">Pending</span>
                                        @break
                                        @case(1)
                                            <span class="badge badge-pill badge-primary">Assigned</span>
                                            @break
                                        @case(2)
                                            <span class="badge badge-pill badge-success">Completed</span>
                                        @break
                                    @endswitch
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="ast_time"><b>Employee</b></label>
                                        <input type="text" class="form-control form-control-alternative" name="ast_time"
                                        value="{{$task->emp?$task->emp->name:'-'}}">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="ast_time"><b>Stated At</b></label>
                                        <input type="text" class="form-control form-control-alternative" name="ast_time"
                                        value="{{$task->start_date}}">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="ast_time"><b>End At</b></label>
                                        <input type="text" class="form-control form-control-alternative" name="ast_time"
                                        value="{{$task->end_date}}">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="des"><b>Description</b></label>
                                        <textarea name="des" class="form-control form-control-alternative" cols="30" rows="3" required>
                                          {{$task->des}}
                                        </textarea>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">

                                        <h6 class="text-center responsive-moblile">
                                            <button id="product-btn" type="button" class="btn btn-secondary di"
                                                data-toggle="modal" data-target="#exampleModal">
                                                + Add Material
                                            </button>
                                            <button id="submit-btn" type="submit" class="btn btn-primary di" disabled>
                                                Save
                                            </button>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>
    <br>

@endsection
@section('js')

@endsection
