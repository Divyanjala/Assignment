<?php

namespace App\Http\Controllers\Admin;

use domain\Facades\InventoryItemFacade;
use domain\Facades\ProductFacade;
use domain\Facades\StoreFacade;
use Illuminate\Http\Request;

class StoreController extends ParentController
{
   public function productStore()
   {
        $response['stores']=StoreFacade::allProductStore();
        return view('pages.admin.store.productStore.index')->with($response);
   }

   public function newProductStore()
   {
        $response['products']=ProductFacade::approveProduct();
        return view('pages.admin.store.productStore.new')->with($response);
   }

   public function materialStore()
   {
        $response['stores']=StoreFacade::allMaterialSore();
        return view('pages.admin.store.materialStore.index')->with($response);
   }

   public function newMaterialStore()
   {
        $response['materials']=InventoryItemFacade::all();
        return view('pages.admin.store.materialStore.new')->with($response);
   }
   public function createMaterialStore(Request $request)
   {
        StoreFacade::makeMaterialSore($request->all());
        return redirect()->route('admin.material-store')->with('alert-success', 'Material Added Successfully');;
   }

   public function approveMaterial($id)
   {
        StoreFacade::approve($id);
        return redirect()->route('admin.material-store')->with('alert-success', 'Material Request Approved Successfully');;
   }
   public function createProductStore(Request $request)
   {
        StoreFacade::make($request->all());
        return redirect()->route('admin.product-store')->with('alert-success', 'Product Added Successfully');;
   }
}
