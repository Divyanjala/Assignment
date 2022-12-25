<?php

namespace domain\InventoryItem;

// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserFine;
use App\Events\ReplyEvent;
use App\Models\InventoryItem;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class InventoryItemService
{

    protected $item;

    public function __construct()
    {
        $this->item = new InventoryItem();

    }

    /**
     * All item
     */
    public function all()
    {
        return $this->item->where('status',1)->orderBy('id', 'desc')->get();
    }
    /**
     * get item
     */
    public function get($id)
    {
        return $this->item->find($id);
    }


        /**
     * Make item Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {
        $item= $this->item->create($data);
        $item= $this->item->where('id',$item->id)->update(['item_code'=>'ITM'.(string)$item->id]);
        return $item;
    }
}
