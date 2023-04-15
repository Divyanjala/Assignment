<?php

namespace domain\Fish;

// use Illuminate\Support\Facades\Auth;
use App\Models\Fish;
use Illuminate\Support\Facades\Auth;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class FishService
{
    protected $fish;
    public function __construct()
    {
        $this->fish = new Fish();
    }
 /**
     * All fish
     */
    public function all()
    {
        return $this->fish->orderBy('id', 'desc')->get();
    }


    /**
     * get order
     */
    public function get($id)
    {
        return $this->fish->find($id);
    }


        /**
     * Make item Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {
        $data['created_by']=Auth::user()->id;
        $fish= $this->fish->create($data);
        $fish= $this->fish->where('id',$fish->id)->update(['code'=>'FISH-'.(string)$fish->id]);
        return $fish;
    }



}
