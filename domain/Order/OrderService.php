<?php

namespace domain\Order;

// use Illuminate\Support\Facades\Auth;

use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Support\Facades\Auth;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class OrderService
{

    protected $order;
    protected $order_item;

    public function __construct()
    {
        $this->order = new Order();
        $this->order_item = new OrderItems();
    }

    /**
     * All order
     */
    public function all()
    {
        return $this->order->orderBy('id', 'desc')->get();
    }

    /**
     * get order
     */
    public function get($id)
    {
        return $this->order->find($id);
    }

       /**
     * Make user Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {
        $count=count($data['product_id']);
        $data['created_by']=Auth::user()->id;
        $data['status']=Order::STATUS['PENDING'];
        $order= $this->order->create($data);
        $amount=0;
        for ($i=0; $i < $count ; $i++) {
            $price=floatval($data['qty'][$i])*floatval($data['price'][$i]);
            $amount+=$price;
           $obj=[
            'qty'=>$data['qty'][$i],
            'product_id'=>$data['product_id'][$i],
            'amount'=>$price,
            'order_id'=>$order->id
           ];
           $this->order_item->create($obj);
        }
        $order= $this->order->where('id',$order->id)->update(['amount'=>$amount]);
        return $order;
    }

}
