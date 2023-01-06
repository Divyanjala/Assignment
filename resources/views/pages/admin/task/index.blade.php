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
                                <th>ID</th>
                                <th>Task name</th>
                                <th>Estimation Time</th>
                                <th>Task Code</th>
                                <th>Status</th>
                                <th>Created At</th>
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
                                    @switch($task->status)
                                        @case(0)
                                            <span class="badge badge-pill badge-danger">Pending</span>
                                        @break

                                        @case(1)
                                            <span class="badge badge-pill badge-primary">Assigned</span>
                                        @case(2)
                                            <span class="badge badge-pill badge-success">Completed</span>
                                        @break
                                    @endswitch
                                </td>
                                <td>{{ $task->created_at }}</td>
                                <td>
                                    <div class="dropdown no-arrow mb-1">
                                        <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuButton" x-placement="bottom-start"
                                            style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item edit-product" href="" class="btn btn-warning"
                                                title="">
                                                <i class="fas fa-edit text-info"></i>&nbsp;Edit
                                            </a>
                                            <hr>
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

@endsection
@section('js')
    <script>

    </script>
@endsection
