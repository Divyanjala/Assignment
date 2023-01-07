<?php

namespace App\Http\Controllers\User;

use domain\Facades\InventoryItemFacade;
use domain\Facades\ProductFacade;
use domain\Facades\StoreFacade;
use Illuminate\Http\Request;

class StoreController extends ParentController
{
   public function productStore()
   {
        $response['stores']=StoreFacade::allProductStore();
        return view('pages.user.store.productStore.index')->with($response);
   }

   public function newProductStore()
   {
        $response['products']=ProductFacade::approveProduct();
        return view('pages.user.store.productStore.new')->with($response);
   }

   public function materialStore()
   {
        $response['stores']=StoreFacade::allMaterialSore();
        return view('pages.user.store.materialStore.index')->with($response);
   }

   public function newMaterialStore()
   {
        $response['materials']=InventoryItemFacade::all();
        return view('pages.user.store.materialStore.new')->with($response);
   }
   public function createMaterialStore(Request $request)
   {
        StoreFacade::makeMaterialSore($request->all());
        return redirect()->route('user.material-store')->with('alert-success', 'Material Added Successfully');;
   }

   public function approveMaterial($id)
   {
        StoreFacade::approve($id);
        return redirect()->route('user.material-store')->with('alert-success', 'Material Request Approved Successfully');;
   }

   public function approveProductStore($id)
   {
        StoreFacade::approveProduct($id);
        return redirect()->route('user.product-store')->with('alert-success', 'Product Request Approved Successfully');;
   }
   public function createProductStore(Request $request)
   {
        StoreFacade::make($request->all());
        return redirect()->route('user.product-store')->with('alert-success', 'Product Added Successfully');;
   }
   public function completeStore($id)
   {
        StoreFacade::update($id,2);
        return redirect()->route('user.product-store')->with('alert-success', 'Product Completed Successfully');;
   }
}
