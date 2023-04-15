<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use domain\Facades\FishFacade;
use Illuminate\Http\Request;

class FishController extends Controller
{
    public function index()
    {
       $response['plants']=FishFacade::all();
       return view('pages.admin.fish.index')->with($response);
    }
    public function new()
    {
       return view('pages.admin.fish.new');
    }
    public function getFish(Request $request)
    {
       $product= FishFacade::get($request->all()['id']);
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
        FishFacade::make($request->all());
        return redirect()->route('admin.fish')->with('alert-success', 'Fish Added Successfully');
    }

}
