<?php

namespace App\Http\Controllers\User;

use domain\Facades\InventoryItemFacade;
use Illuminate\Http\Request;

class InventoryItemController extends ParentController
{
    public function index()
    {
        $response['items']=InventoryItemFacade::all();
       return view('pages.user.inventoryItem.index')->with($response);
    }

    public function getItem(Request $request)
    {
       $product= InventoryItemFacade::get($request->all()['id']);
       return ['name'=>$product['item_name'],'price'=>$product['price']];
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
        return redirect()->route('user.inventory-item')->with('alert-success', 'Item Added Successfully');
    }


}
