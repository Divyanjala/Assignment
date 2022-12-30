<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use domain\Facades\CustomerFacade;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $response['customers']=CustomerFacade::all();
       return view('pages.admin.customer.index')->with($response);
    }
    public function new()
    {
       return view('pages.admin.customer.new');
    }
       /**
     * Store a newly created customer in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CustomerFacade::make($request->all());
        return redirect()->route('admin.customer')->with('alert-success', 'Customer Added Successfully');;
    }


}
