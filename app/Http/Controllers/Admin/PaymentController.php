<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use domain\Facades\OrderFacade;
use domain\Facades\PaymentFacade;
use Illuminate\Http\Request;

class PaymentController extends ParentController
{
    public function new($id)
    {
        $response['order']=OrderFacade::get($id);
        return view('pages.admin.payment.new')->with($response);
    }

    public function store(Request $request)
    {
        PaymentFacade::make($request->all());
        return redirect()->route('admin.order')->with('alert-success', 'Payment Added Successfully');
    }
}
