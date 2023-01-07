@extends('layouts.admin')
@section('header')
    <div class="row  py-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div class="col-lg-6 col-7">
                    <h6 class="h4 text-dark d-inline-block mb-0">Workshop/Unit</h6>

                </div>
                <div class="col-lg-4 text-right">

                    <a href="{{ route('admin.units.new') }}" class=" btn btn-sm btn-primary float-right">
                        <i class="fas fa-plus-circle"></i> Add New
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card border-0 shadow">
        <div class="table-responsive py-4">
            <table id="employees" class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Workshop/unit name</th>
                        <th>Code</th>
                        <th>Factory</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($units as $key => $unit)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $unit->name }}</td>
                            <td>{{ $unit->code }}
                            </td>
                            <td>
                                @switch($unit->factory)
                                @case(0)
                                <span class="badge badge-pill badge-danger">Factory 1</span>
                                @break
                                @case(1)
                                <span class="badge badge-pill badge-primary">Factory 2</span>
                                @break
                                @case(2)
                                <span class="badge badge-pill badge-primary">Factory 3</span>
                                @break
                                @endswitch
                            </td>
                            <td>{{ $unit->department->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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



    </script>
@endsection
