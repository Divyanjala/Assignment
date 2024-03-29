@extends('layouts.admin')
@section('header')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">NEW ORDER</h1>

    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.order.store') }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label for="customer_id"><b>Customer</b></label>
                                        <select class="form-control" id="customer_id" name="customer_id">
                                            @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}">{{ $customer->name }} -
                                                    {{ $customer->code }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="email"><b>Date</b></label>
                                        <input type="date" class="form-control form-control-alternative" name="issue_date"
                                            id="issue_date" aria-describedby="helpId" placeholder="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="unit_id"><b>Unit/Workshop</b></label>
                                        <select class="form-control" id="unit_id" name="unit_id">
                                          @foreach ($units as $unit)
                                          <option value="{{$unit->id}}">{{$unit->name}}-
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
                                            </option>
                                          @endforeach
                                        </select>
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
                                                + Add Product
                                            </button>
                                            <button id="submit-btn" type="submit" class="btn btn-primary di" disabled>
                                                Save Order
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
                                                    <th scope="col">Product name </th>
                                                    <th scope="col">Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody id="products">


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
                        <label for="first_name"><b>Product</b></label>
                        <select class="form-control" id="product_id" name="product_id">
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }} - {{ $product->code }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="first_name"><b>Qty</b></label>
                        <input type="number" class="form-control form-control-alternative" name="qty" id="product_qty"
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
            qty=$('#product_qty').val();
            if (qty=='') {
                return false;
            }
            pro_id=$('#product_id').val();
            $.ajax({
            url: "{{ route('admin.product.get') }}?id=" +pro_id,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            success: function (response) {

                if (response!=[]) {
                    $('#submit-btn').attr('disabled',false);
                    html = ' <tr>'+
                        '  <th scope="row">1</th>'+
                        ' <td>'+response['name']+'</td>'+
                        ' <td>'+qty+'</td>'+
                        ' <input type="hidden" class="form-control" name="product_id[]" value="'+pro_id+'">'+
                        ' <input type="hidden" class="form-control" name="qty[]"'+' value="'+qty+'">'+
                        ' <input type="hidden" class="form-control" name="price[]"'+' value="'+response['price']+'">'+
                        ' </tr>';
                    $("#products").append(html);
                    $('#exampleModal').modal('toggle');
                }
            }
        });

        }
    </script>
@endsection
