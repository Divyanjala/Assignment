<?php

namespace App\Http\Controllers\Admin;

use domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class PlantController extends ParentController
{
    public function index()
    {
       $response['plants']=ProductFacade::all();
       return view('pages.admin.plants.index')->with($response);
    }
    public function new()
    {
       return view('pages.admin.plants.new');
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
        return redirect()->route('admin.plant')->with('alert-success', 'Plant Added Successfully');
    }

    public function approvePlant($id)
    {
        ProductFacade::approve($id);
         return redirect()->route('admin.plant')->with('alert-success', 'Plant Approved Successfully');;
    }
}
