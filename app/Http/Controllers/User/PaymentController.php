<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use domain\Facades\OrderFacade;
use domain\Facades\PaymentFacade;
use Illuminate\Http\Request;

class PaymentController extends ParentController
{
    public function new($id)
    {
        $response['order']=OrderFacade::get($id);
        return view('pages.user.payment.new')->with($response);
    }

    public function store(Request $request)
    {
        PaymentFacade::make($request->all());
        return redirect()->route('user.order')->with('alert-success', 'Payment Added Successfully');
    }
}
