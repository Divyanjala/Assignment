<?php

namespace domain\Product;

// use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class ProductService
{

    protected $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    /**
     * All product
     */
    public function all()
    {
        return $this->product->orderBy('id', 'desc')->get();
    }

       /**
     * All approve Products
     */
    public function approveProducts()
    {
        return $this->product->where('status',1)->orderBy('id', 'desc')->get();
    }
   /**
     * All approveProduct
     */
    public function approveProduct()
    {
        return $this->product->where('status',1)->orderBy('id', 'desc')->get();
    }
    /**
     * get order
     */
    public function get($id)
    {
        return $this->product->find($id);
    }


        /**
     * Make item Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {
        $data['created_by']=Auth::user()->id;
        $data['status']=Store::STATUS['PENDING'];

        $product= $this->product->create($data);
        $product= $this->product->where('id',$product->id)->update(['code'=>'PRO'.(string)$product->id]);
        return $product;
    }

           /**
     * get store
     */
    public function approve($id)
    {

        return $this->product->where('id',$id)->update(['status'=>1,'approved_by'=>Auth::user()->id]);
    }
}
