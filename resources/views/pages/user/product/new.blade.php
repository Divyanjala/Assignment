@extends('layouts.user')
@section('header')
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Product</h1>

</div>
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{ route('user.product.store') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="name"><b>Product Name</b></label>
                                    <input type="text" class="form-control form-control-alternative" name="name"
                                        id="name" aria-describedby="helpId" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="name"><b>Product Price</b></label>
                                    <input type="number" class="form-control form-control-alternative" name="price"
                                        id="price" aria-describedby="helpId" placeholder="" required>
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

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <h6 class="text-center responsive-moblile">
                                        <button id="submit-btn" type="submit" class="btn btn-primary di">
                                            Save Product
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
