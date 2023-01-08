@extends('layouts.admin')
@section('header')
    <div class="row  py-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div class="col-lg-6 col-7">
                    <h6 class="h4 text-dark d-inline-block mb-0">Available Space Report</h6>

                </div>
                <div class="col-lg-4 text-right">

                    <a href="javascript:void(0)" onclick="importReport()" class=" btn btn-sm btn-primary float-right">
                        <i class="fas fa-download"></i> Export
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
                        <th>Unit</th>
                        <th align ="right">Space</th>
                        <th align ="right">Space Use</th>
                        <th align="right">Available</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $key => $record)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $record->name }}</td>
                            <td>{{ number_format($record->space , 2) }}</td>
                            <td>{{ number_format($record->use_space , 2) }}</td>
                            <td >{{ number_format($record->available , 2)}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{implode(" ",$results)}} --}}
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

        function importReport() {
            $("#employees").table2excel({
                // exclude CSS class
                exclude: ".noExl",
                name: "Worksheet Name",
                filename: "space report", //do not include extension
                fileext: ".xls" // file extension
            });
        }
    </script>
@endsection
