<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       $response['products']=ProductFacade::all();
       return view('pages.admin.product.index')->with($response);
    }
    public function new()
    {
       return view('pages.admin.product.new');
    }
       /**
     * Store a newly created order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProductFacade::make($request->all());
        return redirect()->route('admin.product')->with('alert-success', 'Product Added Successfully');
    }

    public function approveProduct($id)
    {
        ProductFacade::approve($id);
         return redirect()->route('admin.product')->with('alert-success', 'Product Approved Successfully');;
    }
}
