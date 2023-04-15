@extends('layouts.user')
@section('header')
    <div class="row  py-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div class="col-lg-6 col-7">
                    <h6 class="h4 text-dark d-inline-block mb-0">Growth Management</h6>

                </div>
                <div class="col-lg-4 text-right">

                    <a href="" data-toggle="modal" data-target="#exampleModal"
                        class=" btn btn-sm btn-primary float-right">
                        <i class="fas fa-plus-circle"></i> Add New
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card border-0 shadow">
        <div class="table-responsive p-4">
            <table id="employees" class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Plant name</th>
                        <th>Plant Code</th>
                        <th>Date</th>
                        <th>Height</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rates as $key => $rate)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $rate->plant->name }}</td>
                            <td>{{ $rate->plant->code }}</td>
                            <td>{{ $rate->date }}</td>
                            <td>{{ $rate->height }} mm</td>
                            <td>
                                <div class="dropdown no-arrow mb-1">
                                    <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cog"></i>
                                    </a>

                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
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
                <form action="{{ route('user.growth.store') }}" method="POST">
                <div class="modal-body">

                        @csrf
                        <div class="form-group">
                            <label for="first_name"><b>Plant</b></label>
                            <select class="form-control" id="plant_id" name="plant_id">
                                @foreach ($plants as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }} - {{ $product->code }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="first_name"><b>Date</b></label>
                            <input type="date" class="form-control form-control-alternative" name="date"
                                id="product_qty" aria-describedby="helpId" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="first_name"><b>Height (mm)</b></label>
                            <input type="number" class="form-control form-control-alternative" name="height"
                                id="product_qty" aria-describedby="helpId" placeholder="" required>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"class="btn btn-primary">Add</button>
                </div>
            </form>
            </div>
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
