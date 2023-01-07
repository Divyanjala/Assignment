<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use domain\Facades\CustomerFacade;
use domain\Facades\OrderFacade;
use domain\Facades\ProductFacade;
use domain\Facades\StoreFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class OrderController extends Controller
{
    public function index()
    {
       $response['orders']=OrderFacade::all();
       return view('pages.admin.order.index')->with($response);
    }
    public function new()
    {
        $response['products']=ProductFacade::approveProducts();
        $response['customers']=CustomerFacade::all();
       return view('pages.admin.order.new')->with($response);
    }
    public function view($id)
    {
       $response['order']=OrderFacade::get($id);
       return view('pages.admin.order.view')->with($response);
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

    public function addStore($id)
    {
        $order=OrderFacade::get($id);
        foreach ($order->items as  $item) {
            if ( $item->store_status==0) {
                $data['order_id']= $order->id;
                $data['product_id']= $item->product_id;
                $data['qty']=$item->qty;
                $data['date']='2023-01-01 07:55:52';
                StoreFacade::make($data);
                OrderFacade::updateOrderItem($item->id);
            }else{
                return redirect()->route('admin.order')->with('alert-danger', 'Already Added');
            }

        }
        OrderFacade::update($id,2);
        return redirect()->route('admin.order')->with('alert-success', 'Order Added to Store Successfully');
    }


    public function approveOrder($id)
    {
        OrderFacade::approve($id);
         return redirect()->route('admin.order')->with('alert-success', 'Order Approved Successfully');;
    }
}
