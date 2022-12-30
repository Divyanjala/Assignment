<?php

namespace domain\Customer;

use App\Models\Customer;

// use Illuminate\Support\Facades\Auth;


/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class CustomerService
{

    protected $customer;

    public function __construct()
    {
        $this->customer = new Customer();
    }

    /**
     * All customer
     */
    public function all()
    {
        return $this->customer->where('status',1)->orderBy('id', 'desc')->get();
    }
    
    /**
     * get customer
     */
    public function get($id)
    {
        return $this->customer->find($id);
    }


    /**
     * Make user Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {
        $customer= $this->customer->create($data);
        $customer= $this->customer->where('id',$customer->id)->update(['code'=>'CUS'.(string)$customer->id]);
        return $customer;
    }

}
