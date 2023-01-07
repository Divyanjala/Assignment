<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class ProductController extends ParentController
{
    public function index()
    {
       $response['products']=ProductFacade::all();
       return view('pages.user.product.index')->with($response);
    }
    public function new()
    {
       return view('pages.user.product.new');
    }
    public function getProduct(Request $request)
    {
       $product= ProductFacade::get($request->all()['id']);
       return ['name'=>$product['name'],'price'=>$product['price']];
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
        return redirect()->route('user.product')->with('alert-success', 'Product Added Successfully');
    }

    public function approveProduct($id)
    {
        ProductFacade::approve($id);
         return redirect()->route('user.product')->with('alert-success', 'Product Approved Successfully');;
    }
}
