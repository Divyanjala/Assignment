<?php

namespace domain\Product;

// use Illuminate\Support\Facades\Auth;

use App\Models\Product;

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
        return $this->product->where('status',1)->orderBy('id', 'desc')->get();
    }

    /**
     * get order
     */
    public function get($id)
    {
        return $this->product->find($id);
    }

}
