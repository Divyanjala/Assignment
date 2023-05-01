@extends('layouts.user')
@section('header')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Future health plan.</h1>

    </div>
@endsection

@section('content')
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        New future health plan
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="container-fluid">
                        <form action="{{ route('user.health.store') }}" method="post">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="name"><b>Tank Name</b></label>
                                                        <input type="text" class="form-control form-control-alternative"
                                                            name="tank_name" id="name" aria-describedby="helpId"
                                                            placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label for="name"><b>Tank Width (cm)</b></label>
                                                        <input type="number" class="form-control form-control-alternative"
                                                            name="width" id="price" aria-describedby="helpId"
                                                            placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label for="name"><b>Tank Height (cm)</b></label>
                                                        <input type="number" class="form-control form-control-alternative"
                                                            name="height" id="price" aria-describedby="helpId"
                                                            placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="name"><b>Start Date</b></label>
                                                        <input type="date" class="form-control form-control-alternative"
                                                            name="date" id="price" aria-describedby="helpId"
                                                            placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="name"><b>Shedule period</b></label>
                                                        <select class="form-control" id="period" name="period">
                                                            <option value="1">1 Month</option>
                                                            <option value="2">3 Month</option>
                                                            <option value="3">6 Month</option>
                                                            <option value="4">1 Year</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="des"><b>Description</b></label>
                                                        <textarea name="dec" class="form-control form-control-alternative" cols="30" rows="3" required></textarea>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <h6 class="text-right responsive-moblile">
                                                            <button id="submit-btn" type="submit"
                                                                class="btn btn-primary di">
                                                                Add Health plan
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
                </div>
            </div>
        </div>

    </div>
    <br>

    <br>
    @foreach ($plans as $plan)
        <div class="card border-0 shadow  mt-4">
            <div class="row ml-2 mr-2">
                <div class="col-md-12 text-center text-uppercase">
                    <h3>{{ $plan->tank_name }}</h3>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="name"><b>Tank Width (cm)</b></label>
                        <input type="number" readonly class="form-control form-control-alternative"
                            value="{{ $plan->width }}">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="name"><b>Tank Height (cm)</b></label>
                        <input type="number" class="form-control form-control-alternative"readonly
                            value="{{ $plan->height }}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="name"><b>Start Date</b></label>
                        <input type="text" class="form-control form-control-alternative" readonly
                            value="{{ $plan->date }}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="name"><b>Shedule period</b></label>
                        <select class="form-control" id="period" name="period" disabled>
                            <option value="1" {{ $plan->period == 1 ? 'selected' : '' }}>1 Month</option>
                            <option value="2" {{ $plan->period == 2 ? 'selected' : '' }}>3 Month</option>
                            <option value="3" {{ $plan->period == 3 ? 'selected' : '' }}>6 Month</option>
                            <option value="4" {{ $plan->period == 4 ? 'selected' : '' }}>1 Year</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="des"><b>Description</b></label>
                        <textarea name="dec" class="form-control form-control-alternative" cols="30" rows="3" readonly>
                            {{ $plan->dec }}
                        </textarea>

                    </div>
                </div>
            </div>
            <div class="table-responsive p-4">
                <table id="employees" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Task</th>
                            <th>Date</th>
                            <th>status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($plan->shedules)

                            @foreach ($plan->shedules as $key => $shedule)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $shedule->task }}</td>
                                    <td><span class="badge badge-pill badge-primary">{{ $shedule->date }} </span></td>
                                    <td>
                                        @switch($shedule->status)
                                        @case(0)
                                            <span class="badge badge-pill badge-danger">Pending</span>
                                        @break

                                        @case(1)
                                            <span class="badge badge-pill badge-success">Completed</span>
                                        @break
                                    @endswitch


                                    </td>
                                    <td>
                                        <div class="dropdown no-arrow mb-1">



                                            @if ($shedule->status==0)
                                            <a class="dropdown-item edit-product"
                                            href="{{ route('user.health.approve', ['id' => $shedule->id]) }}"
                                            class="btn btn-warning" title="">
                                            <i class="fas fa-check text-info"></i>&nbsp;Complete
                                        </a>
                                            @endif
                                            {{-- onclick="approve('{{ route('user.health.approve', $shedule->id) }}')" --}}

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        @endif

                    </tbody>

                </table>
            </div>
        </div>
    @endforeach
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#employees').dataTable({
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


        function approve(url, title = "Do You Want To Approve It") {
            $.confirm({
                title: 'Are you sure,',
                content: title,
                autoClose: 'cancel|8000',
                type: 'green',
                theme: 'material',
                backgroundDismiss: false,
                backgroundDismissAnimation: 'glow',
                buttons: {
                    'Yes, Publish IT': function() {
                        window.location.href = url;
                        confirmButton: "Yes";
                        cancelButton: "Cancel";
                    },
                    cancel: function() {

                    },

                }
            });
        }
    </script>
@endsection
