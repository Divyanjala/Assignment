<?php

namespace domain\Order;

// use Illuminate\Support\Facades\Auth;

use App\Models\Order;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class OrderService
{

    protected $order;

    public function __construct()
    {
        $this->order = new Order();
    }

    /**
     * All order
     */
    public function all()
    {
        return $this->order->where('status',1)->orderBy('id', 'desc')->get();
    }

    /**
     * get order
     */
    public function get($id)
    {
        return $this->order->find($id);
    }

}
