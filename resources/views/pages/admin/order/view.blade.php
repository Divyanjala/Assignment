@extends('layouts.admin')
@section('header')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">VIEW ORDER</h1>

    </div>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-lg-6">
                <h5>Order Details</h5>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="customer_id"><b>Customer</b></label>
                                    <input type="text" class="form-control form-control-alternative" name="customer"
                                        id="customer" value="{{ $order->customer->name }}">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="email"><b>Date</b></label>
                                    <input type="date" class="form-control form-control-alternative" name="issue_date"
                                        value="{{ $order->issue_date }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="customer_id"><b>Full Amount</b></label>
                                    <input type="text" class="form-control form-control-alternative" name="customer"
                                        id="customer" value="{{ $order->amount }}">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="email"><b>Created At </b></label>

                                    <input type="text" class="form-control form-control-alternative" name="issue_date"
                                        value="{{ $order->created_at }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="customer_id"><b>Status</b></label>
                                    <br>
                                    @switch($order->status)
                                        @case(0)
                                            <span class="badge badge-pill badge-danger">Deactivated</span>
                                        @break

                                        @case(1)
                                            <span class="badge badge-pill badge-primary">Active</span>
                                        @break
                                    @endswitch
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="email"><b>Approved By</b></label>

                                    <span
                                        class="badge badge-pill badge-danger">{{ $order->approve ? $order->approve->name : 'Not Approve' }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="des"><b>Description</b></label>
                                    <textarea name="des" class="form-control form-control-alternative" cols="30" rows="3">
                                            {{ $order->des }}
                                        </textarea>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5>Product Item</h5>
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
                                                <th scope="col">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody id="products">
                                            @foreach ($order->items as $key => $item)
                                                <tr>
                                                    <td>{{ $key }}</td>
                                                    <td>{{ $item->product->name }} </td>
                                                    <td>{{ $item->qty }}</td>
                                                    <td><b>$ </b>{{number_format( $item->amount, 2, '.', ',')  }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <h5>Payment details</h5>
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Amount </th>

                                            </tr>
                                        </thead>
                                        <tbody id="products">
                                            @foreach ($order->payments as $key => $payment)
                                                <tr>
                                                    <td>{{ $key }}</td>
                                                    <td>{{ $payment->date }}</td>
                                                    <td><b>$ </b>{{number_format( $payment->amount, 2, '.', ',')}} </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
