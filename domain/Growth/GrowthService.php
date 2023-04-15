<?php

namespace domain\Growth;

use App\Models\GrowthRate;
use Illuminate\Support\Facades\Auth;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class GrowthService
{
    protected $growth;
    public function __construct()
    {
        $this->growth = new GrowthRate();
    }
 /**
     * All fish
     */
    public function all()
    {
        return $this->growth->orderBy('id', 'desc')->get();
    }


    /**
     * get order
     */
    public function get($id)
    {
        return $this->growth->find($id);
    }


        /**
     * Make item Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {
        $data['user_id']=Auth::user()->id;
        $fish= $this->growth->create($data);
        return $fish;
    }

    public function getGrowth($id)
    {
        return $this->growth->where('user_id',$id)->get();
    }

}
