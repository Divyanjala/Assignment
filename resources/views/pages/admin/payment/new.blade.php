@extends('layouts.admin')
@section('header')
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Payment</h1>

</div>
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.payment.store') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="name"><b>Customer Name</b></label>
                                    <input type="text" disabled class="form-control form-control-alternative"
                                        id="name" aria-describedby="helpId" value="{{$order->customer->name}}">
                                        <input type="hidden" class="form-control"
                                        name="order_id" aria-describedby="helpId" value="{{$order->id}}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="name"><b>Full Amount</b></label>
                                    <input type="text" class="form-control form-control-alternative"
                                    value="{{number_format($order->amount, 2, '.', ',') }}" readonly>
                                </div>
                            </div>
                        </div>
                        @if ($order->amount!=$order->paid_amount)
                        <div class="row">


                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="name"><b>Paid Amount</b></label>
                                    <input type="number" disabled class="form-control form-control-alternative" name="price"
                                    value="{{number_format($order->paid_amount, 2, '.', ',') }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="name"><b>Payment Date</b></label>
                                    <input type="date" class="form-control form-control-alternative" name="date"
                                        id="name" aria-describedby="helpId" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="name"><b>Current Payment</b></label>
                                    <input type="number" class="form-control form-control-alternative" name="amount"
                                        id="price" max="{{$order->amount-$order->paid_amount}}" required>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="des"><b>Description</b></label>
                                    <textarea name="des"  class="form-control form-control-alternative"
                                    cols="30" rows="3" required></textarea>

                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    @if ($order->amount==$order->paid_amount)
                                    <h6 class="text-center responsive-moblile">
                                        <img src="{{ asset('img/paid.jpg')}}" alt="">
                                    </h6>
                                    @else
                                    <h6 class="text-center responsive-moblile">
                                        <button id="submit-btn" type="submit" class="btn btn-primary di">
                                            Save
                                        </button>
                                    </h6>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
