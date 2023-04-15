<?php

namespace domain\Plant;

// use Illuminate\Support\Facades\Auth;

use App\Models\Plant;
use Illuminate\Support\Facades\Auth;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class PlantService
{

    protected $plant;

    public function __construct()
    {
        $this->plant = new Plant();
    }

    /**
     * All plant
     */
    public function all()
    {
        return $this->plant->orderBy('id', 'desc')->get();
    }


    /**
     * get order
     */
    public function get($id)
    {
        return $this->plant->find($id);
    }


        /**
     * Make item Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {
        $data['created_by']=Auth::user()->id;
        $plant= $this->plant->create($data);
        $plant= $this->plant->where('id',$plant->id)->update(['code'=>'PLA'.(string)$plant->id]);
        return $plant;
    }


}
