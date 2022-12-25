<?php

namespace App\Http\Controllers\Admin;

use domain\Facades\InventoryItemFacade;
use Illuminate\Http\Request;

class InventoryItemController extends ParentController
{
    public function index()
    {
        $response['items']=InventoryItemFacade::all();
       return view('pages.admin.inventoryItem.index')->with($response);
    }



       /**
     * Store a newly created customer in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        InventoryItemFacade::make($request->all());
        return redirect()->route('admin.inventory-item')->with('alert-success', 'Item Added Successfully');;
    }


}
