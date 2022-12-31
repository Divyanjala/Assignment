<?php

namespace domain\Store;

use App\Models\InventoryItem;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Auth;


/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class StoreService
{

    protected $store;

    public function __construct()
    {
        $this->store = new Store();
        $this->material = new InventoryItem();
    }

    /**
     * All store
     */
    public function all()
    {
        return $this->store->orderBy('id', 'desc')->get();
    }

    /**
     * get store
     */
    public function get($id)
    {
        return $this->store->find($id);
    }

       /**
     * get store
     */
    public function approve($id)
    {
        $item=$this->get($id);
        $this->material->where('id',$id)->update(['avg_qty'=>$item->qty]);
        return $this->store->where('id',$id)->update(['status'=>1,'approved_by'=>Auth::user()->id]);
    }

    /**
     * Make store Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {
        $store= $this->store->create($data);
        return $store;
    }

        /**
     * Make store Array
     * @param array $data
     * @return mixed
     */
    public function makeMaterialSore($data)
    {

        $data['created_by']=Auth::user()->id;
        $data['type']=Store::TYPES['MATERIAL'];
        $data['in_out_status']=Store::INOUTSTATUS['IN'];
        $data['status']=Store::STATUS['PENDING'];
        $store= $this->store->create($data);
        return $store;
    }
}
