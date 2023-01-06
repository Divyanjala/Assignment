<?php

namespace domain\Payment;

// use Illuminate\Support\Facades\Auth;

use App\Models\Order;
use App\Models\Payment;


/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class PaymentService
{

    protected $payment;
    protected $order;

    public function __construct()
    {
        $this->payment = new Payment();
        $this->order = new Order();
    }

    /**
     * All payment
     */
    public function all()
    {
        return $this->payment->orderBy('id', 'desc')->get();
    }

   /**
     * Make item Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {
        $product= $this->payment->create($data);
        $order= $this->order->find($data['order_id']);
        $new_amount=$order->paid_amount+$data['amount'];
        $order= $this->order->where('id',$order->id)->update(['paid_amount'=> $new_amount]);
        return $product;
    }

}
