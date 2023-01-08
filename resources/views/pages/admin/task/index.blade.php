@extends('layouts.admin')
@section('header')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">TASK LIST</h1>

    </div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card border-0 shadow">
                <div class="table-responsive py-4">
                    <table id="employees" class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Task name</th>
                                <th>Estimation Time</th>
                                <th>Task Code</th>
                                <th>Status</th>
                                <th>Stated At</th>
                                <th>End At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $key => $task)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $task->task_name }}</td>
                                    <td>{{ $task->ast_time }}<b> h</b></td>
                                    <td>{{ $task->task_code }}</td>

                                    <td>
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
                                    </td>
                                    <td>{{ $task->start_date?$task->start_date:'-' }}</td>
                                    <td>{{ $task->end_date?$task->end_date:'-' }}</td>

                                    <td>
                                        <div class="dropdown no-arrow mb-1">
                                            <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-cog"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuButton" x-placement="bottom-start"
                                                style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                @if ($task->task_status==app\Models\Task::STATUS['PENDING'])
                                                <a class="dropdown-item edit-product" href="javaScript.void(0)"
                                                class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"
                                                onclick="addTask({{ $task->id }})">
                                                <i class="fas fa-user text-info"></i>&nbsp;Assign
                                                  </a>
                                                  <hr>
                                                @endif
                                                @if ($task->task_status==app\Models\Task::STATUS['ASSIGNED'])
                                                <a class="dropdown-item edit-product" href="javaScript.void(0)"
                                                class="btn btn-warning" data-toggle="modal" data-target="#completeModal"
                                                onclick="addTask({{ $task->id }})">
                                                <i class="fas fa-user text-info"></i>&nbsp;Complete
                                                  </a>
                                                  <hr>
                                                @endif
                                                <a class="dropdown-item edit-product"  href="{{ route('admin.task.view', $task->id) }}"
                                                class="btn btn-warning" >
                                                <i class="fas fa-eye text-info"></i>&nbsp;View
                                                  </a>

                                                {{-- <a class="dropdown-item edit-product"
                                                href="{{ route('admin.order.view', ['id' => $order->id]) }}"
                                                class="btn btn-warning" title="">
                                                <i class="fas fa-eye text-info"></i>&nbsp;View
                                            </a> --}}

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Task Assign</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('admin.task.assign') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="first_name"><b>Employee</b></label>
                            <select class="form-control" id="emp_id" name="emp_id">
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->name }} - {{ $employee->code }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="first_name"><b>Start Date and Time</b></label>
                            <input type="datetime-local" class="form-control form-control-alternative" name="start_date"
                                id="start_date" aria-describedby="helpId" placeholder="" required>
                            <input type="hidden" class="form-control" name="task_id" id="task_id">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" onclick="addProduct()" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="completeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="completeModalLabel">Task End</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('admin.task.complete') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="first_name"><b>Wast Time (hourse)</b></label>
                            <input type="number" class="form-control form-control-alternative" name="spd_time"
                            id="spd_time" aria-describedby="helpId" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="first_name"><b>End Date and Time</b></label>
                            <input type="datetime-local" class="form-control form-control-alternative" name="end_date"
                                id="end_date" aria-describedby="helpId" placeholder="" required>
                            <input type="hidden" class="form-control" name="task_id" id="task_id_end">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" onclick="addProduct()" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function addTask(id) {
            $('#task_id_end').val(id);
            $('#task_id').val(id);
        }
    </script>
@endsection
