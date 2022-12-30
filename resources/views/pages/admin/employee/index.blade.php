@extends('layouts.admin')
@section('header')

<div class="row  py-4">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <div class="col-lg-6 col-7">
                <h6 class="h4 text-dark d-inline-block mb-0">Employee Management</h6>

            </div>
            <div class="col-lg-4 text-right">

                <a href="{{ route('admin.employee.new') }}" class=" btn btn-sm btn-primary float-right">
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
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $key=>$employee)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>
                            @switch($employee->level)
                            @case(1)
                              <span class="badge badge-pill badge-primary">LEVEL1</span>
                            @break
                            @case(2)
                               <span class="badge badge-pill badge-primary">LEVEL2</span>
                               @break
                            @case(3)
                               <span class="badge badge-pill badge-primary">LEVEL3</span>
                               @break
                            @case(4)
                              <span class="badge badge-pill badge-primary">LEVEL4</span>
                              @break
                            @case(5)
                               <span class="badge badge-pill badge-primary">LEVEL5</span>
                            @break
                            @endswitch
                        </td>
                        <td>{{$employee->created_at}}</td>
                        <td>
                            @switch($employee->status)
                            @case(0)
                            <span class="badge badge-pill badge-danger">Deactivated</span>
                            @break
                            @case(1)
                            <span class="badge badge-pill badge-primary">Active</span>
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
                                    <a class="dropdown-item edit-product"
                                        href="" class="btn btn-warning"
                                        title="">
                                        <i class="fas fa-edit text-info"></i>&nbsp;Edit
                                    </a>
                                    {{-- @if (!$customer->email_verified_at)
                                    <a class="dropdown-item" href="{{route('admin-verify-member',$customer->id)}}"><i
                                            class="fas fa-user-check text-success"></i>&nbsp;Verify</a>
                                    @endif
                                    <a class="dropdown-item" target="_blank"
                                        href="{{route('customer.simulate',$customer->id)}}"><i
                                            class="fas fa-user-check text-success"></i>&nbsp;Simulate</a>
                                    <a class="dropdown-item delete-customer" href="javascript:void(0)"
                                        class="btn btn-danger" title=""
                                        onclick="delconf('{{ route('customers.delete', $customer->id) }}')">
                                    <i class="fas fa-trash text-danger"></i>&nbsp;&nbsp;&nbsp;Delete
                                    </a>
                                    @if ($customer->status ==0)
                                    <a class="dropdown-item delete-customer" href="javascript:void(0)" title=""
                                        onclick="delconf('{{ route('customers.deactivated',$customer->id) }}','Do You Want To Deactivate This Customer?','Yes,Deactivate','Customer Deactivated Successfully')">
                                        <i class="fas fa-trash text-danger"></i>&nbsp;Deactivate</a>
                                    @endif --}}

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