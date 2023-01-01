@extends('layouts.admin')
@section('header')
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Product Store</h1>

</div>
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.product-store.store') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="product_id"><b>Product</b></label>
                                    <select class="form-control" id="product_id" name="product_id">
                                        @foreach ($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}} - {{$product->code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="email"><b>Start date</b></label>
                                    <input type="date" class="form-control form-control-alternative" name="date"
                                        id="date"  aria-describedby="helpId"
                                        placeholder="" required>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="qty"><b>Qty</b></label>
                                    <input type="number" class="form-control form-control-alternative" name="qty"
                                        id="qty"  aria-describedby="helpId"
                                        placeholder="" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="email"><b>Description</b></label>
                                    <textarea name="des"  class="form-control form-control-alternative"
                                    cols="30" rows="3" required></textarea>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <h6 class="text-center responsive-moblile">
                                        <button id="submit-btn" type="submit" class="btn btn-primary di">
                                            Save
                                        </button>
                                    </h6>
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
