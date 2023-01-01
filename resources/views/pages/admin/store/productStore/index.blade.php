@extends('layouts.admin')
@section('header')

<div class="row  py-4">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <div class="col-lg-6 col-7">
                <h6 class="h4 text-dark d-inline-block mb-0">Product Store Management</h6>

            </div>
            <div class="col-lg-4 text-right">

                <a href="{{ route('admin.product-store.new') }}" class=" btn btn-sm btn-primary float-right">
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
                    <th>Product</th>
                    <th>Date</th>
                    <th>Qty</th>
                    <th>Created by</th>
                    <th>Approved by</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stores as $key=>$store)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$store->product->name}}</td>
                        <td>{{$store->date}}
                        </td>
                        <td>{{$store->qty}}</td>
                        <td>{{$store->user->name}}</td>
                        <td>{{$store->approved_by?$store->approve->name:'-'}}</td>
                        <td>
                            @switch($store->status)
                            @case(0)
                            <span class="badge badge-pill badge-danger">Pending</span>
                            @break
                            @case(1)
                            <span class="badge badge-pill badge-primary">Approved</span>
                            @break
                            @endswitch
                        </td>
                        <td>
                            <div class="dropdown no-arrow mb-1">
                                <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cog"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuButton" x-placement="bottom-start"
                                    style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    @if ( $store->status==0)
                                    <a class="dropdown-item delete-customer" href="javascript:void(0)"
                                    class="btn btn-danger" title=""
                                    onclick="approve('{{ route('admin.material-store.approve', $store->id) }}')">
                                <i class="fas fa-check text-primary"></i>&nbsp;&nbsp;&nbsp;Approve
                                </a>
                                    @endif


                                </div>
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@section('js')
<script>
 $(document).ready(function () {
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
