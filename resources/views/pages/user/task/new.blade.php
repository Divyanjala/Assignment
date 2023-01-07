@extends('layouts.user')
@section('header')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">TASK</h1>

    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <form action="{{ route('user.task.store') }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label for="task_name"><b>Task name</b></label>
                                        <input type="text" class="form-control form-control-alternative" name="task_name"
                                            id="task_name" aria-describedby="helpId" placeholder="" required>
                                            <input type="hidden" class="form-control form-control-alternative" name="store_id" value="{{$store_id}}">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="ast_time"><b>Estimation Time(hours)</b></label>
                                        <input type="number" class="form-control form-control-alternative" name="ast_time"
                                            id="ast_time" aria-describedby="helpId" placeholder="" required>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="des"><b>Description</b></label>
                                        <textarea name="des" class="form-control form-control-alternative" cols="30" rows="3" required></textarea>

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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Material name </th>
                                                    <th scope="col">Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody id="task_material">


                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-11">
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
                                <td>{{ $task->created_at }}</td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Product Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="first_name"><b>Material</b></label>
                        <select class="form-control" id="item_id" name="item_id">
                            @foreach ($materials as $material)
                                <option value="{{ $material->id }}">{{ $material->item_name }} - {{ $material->item_code }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="first_name"><b>Qty</b></label>
                        <input type="number" class="form-control form-control-alternative" name="qty" id="item_qty"
                            aria-describedby="helpId" placeholder="" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" onclick="addProduct()" class="btn btn-primary">Add</button>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function addProduct() {
            qty = $('#item_qty').val();
            if (qty == '') {
                return false;
            }
            pro_id = $('#item_id').val();
            $.ajax({
                url: "{{ route('user.inventory-item.get') }}?id=" + pro_id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                success: function(response) {

                    if (response != []) {
                        $('#submit-btn').attr('disabled', false);
                        html = ' <tr>' +
                            '  <th scope="row">1</th>' +
                            ' <td>' + response['name'] + '</td>' +
                            ' <td>' + qty + '</td>' +
                            ' <input type="hidden" class="form-control" name="item_id[]" value="' + pro_id +
                            '">' +
                            ' <input type="hidden" class="form-control" name="qty[]"' + ' value="' + qty +
                            '">'
                            ' </tr>';
                        $("#task_material").append(html);
                        $('#exampleModal').modal('toggle');
                    }
                }
            });

        }
    </script>
@endsection
