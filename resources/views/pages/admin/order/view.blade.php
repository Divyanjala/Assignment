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

            <div class="col-lg-12">
                <h5>Order Details</h5>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="customer_id"><b>Customer</b></label>
                                    <input type="text" class="form-control form-control-alternative" readonly
                                        id="customer" value="{{ $order->customer->name }}">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="email"><b>Date</b></label>
                                    <input type="date" class="form-control form-control-alternative" readonly
                                        value="{{ $order->issue_date }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="customer_id"><b>Full Amount</b></label>
                                    <input type="text" class="form-control form-control-alternative" readonly
                                        id="customer" value="{{ $order->amount }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="customer_id"><b>Paid Amount</b></label>
                                    <input type="text" class="form-control form-control-alternative" readonly
                                        id="customer" value="{{ $order->paid_amount }}">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="email"><b>Created At </b></label>

                                    <input type="text" class="form-control form-control-alternative" readonly
                                        value="{{ $order->created_at }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="customer_id"><b>Payment Status</b></label>
                                    <br>
                                    @if ($order->paid_amount == 0)
                                        <span class="badge badge-pill badge-danger">Pending</span>
                                    @elseif ($order->amount == $order->paid_amount)
                                        <span class="badge badge-pill badge-primary">Paid</span>
                                    @else
                                        <span class="badge badge-pill badge-success">Partial Payment</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="customer_id"><b>Order Status</b></label>
                                    <br>
                                    @switch($order->status)
                                        @case(0)
                                            <span class="badge badge-pill badge-danger">Deactivated</span>
                                        @break

                                        @case(1)
                                            <span class="badge badge-pill badge-primary">Active</span>
                                        @break

                                        @case(2)
                                            <span class="badge badge-pill badge-warning">Producing</span>
                                        @break
                                    @endswitch
                                </div>
                            </div>
                            <div class="col-lg-4">
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
            <div class="col-lg-12">
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
                                       
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="products">
                                            @foreach ($order->items as $key => $item)
                                                <tr>
                                                    <td>{{ $key }}</td>
                                                    <td>{{ $item->product->name }} </td>
                                                    <td>{{ $item->qty }}</td>

                                                    <td>
                                                        @switch($item->status)
                                                            @case(0)
                                                                <span class="badge badge-pill badge-danger">Pending</span>
                                                            @break

                                                            @case(1)
                                                                <span class="badge badge-pill badge-primary">Approved</span>
                                                            @break
                                                            @case(2)
                                                            <span class="badge badge-pill badge-success">Manufactured</span>
                                                            @break
                                                        @endswitch
                                                    </td>
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
                                                    <td><b>$ </b>{{ number_format($payment->amount, 2, '.', ',') }} </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    @if ($order->amount == $order->paid_amount)
                                        <h6 class="text-center responsive-moblile">
                                            <img src="{{ asset('img/paid.jpg') }}" alt="">
                                        </h6>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
