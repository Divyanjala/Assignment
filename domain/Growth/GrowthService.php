<?php

namespace domain\Growth;

use App\Models\GrowthRate;
use App\Models\Plant;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class GrowthService
{
    protected $growth;
    protected $plants;
    public function __construct()
    {
        $this->growth = new GrowthRate();
        $this->plants = new Plant();
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

            /**
     * All payment
     */
    public function chartdata()
    {
        $plants=$this->plants->get();

        $collect=collect();

        // return $arra
        $startDate = Carbon::now(); //returns current day
        $user_id=Auth::user()->id;
        foreach ($plants as $plant) {
            $array = [];

            $firstDay = $startDate->format('Y-m-d');
            $sum=$this->growth
            ->where('plant_id',$plant->id)
            ->where('user_id',$user_id)
            ->where('date',$firstDay)->sum('height');
            if ($sum!=0) {
                array_push($array, $sum);
            }


            for ($i=1; $i <12 ; $i++) {
                $firstDay = Carbon::now()->addDays($i)->format('Y-m-d');
                $sum1=$this->growth
                ->where('plant_id',$plant->id)
                ->where('user_id',$user_id)
                ->where('date',$firstDay)->sum('height');

                if ($sum1!=0) {
                    $sum=$sum1;
                    array_push($array, $sum1);
                }else{
                    array_push($array, $sum);
                }
            }
            if ($sum!=0) {
                $collect->push($array);
            }

        }
;
        return $collect;
    }

}
