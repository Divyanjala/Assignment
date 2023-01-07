@extends('layouts.admin')
@section('header')
    <div class="row  py-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div class="col-lg-6 col-7">
                    <h6 class="h4 text-dark d-inline-block mb-0">Income Report</h6>

                </div>
                <div class="col-lg-4 text-right">

                    <a href="" class=" btn btn-sm btn-primary float-right">
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
                        <th>Product</th>
                        <th align ="right">Unit price</th>
                        <th>Qty</th>
                        <th align="right">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($results as $key => $record)
                        @php
                            $total += $record->amount;
                        @endphp
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $record->name }}</td>
                            <td>{{ number_format($record->price , 2) }}</td>
                            <td>{{ $record->qty }}</td>
                            <td >{{ number_format($record->amount , 2)}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <th align="center" colspan="4">Total</th>
                        <th align="right">{{ number_format($total, 2) }}</th>
                    </tr>
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
    </script>
@endsection
