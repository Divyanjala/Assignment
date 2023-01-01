<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use domain\Facades\CustomerFacade;
use domain\Facades\OrderFacade;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
       $response['orders']=OrderFacade::all();
       return view('pages.admin.order.index')->with($response);
    }
    public function new()
    {
        $response['customers']=CustomerFacade::all();
       return view('pages.admin.order.new')->with($response);
    }
       /**
     * Store a newly created order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OrderFacade::make($request->all());
        return redirect()->route('admin.order')->with('alert-success', 'Order Added Successfully');
    }

}
