<?php

namespace domain\Growth;

use App\Models\GrowthRate;
use App\Models\HealthPlan;
use App\Models\HealthPlanShedule;
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
    protected $plan;
    protected $shedule;
    public function __construct()
    {
        $this->growth = new GrowthRate();
        $this->plants = new Plant();
        $this->plan = new HealthPlan();
        $this->shedule = new HealthPlanShedule();
    }
    /**
     * All fish
     */
    public function all()
    {
        return $this->growth->orderBy('id', 'desc')->get();
    }

    public function allPlane($id)
    {
        return $this->plan->orderBy('id', 'desc')->where('user_id', $id)->get();
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
        $data['user_id'] = Auth::user()->id;
        $fish = $this->growth->create($data);
        return $fish;
    }

    /**
     * Make item Array
     * @param array $data
     * @return mixed
     */
    public function makeHealth($data)
    {
        $data['user_id'] = Auth::user()->id;
        $plan = $this->plan->create($data);


        $task = [
            1 => 'Conduct a water change of a minimum 30%',
            2 => 'Remove any dead or decaying leaves',
            3 => ' Dose fertilizers & liquid carbon.',
            4 => 'Clean aquarium glass and top up water levels',
            5 => 'Check your aquarium equipment is working properly
                 (heater, filter, light timer, CO2 equipment etc.).',
            6 => 'Trim your plants using your plant scissors. ',
            7 => 'Clean out your filters.',
            8 => ' Clean pipes, lily pipes and any other equipment inside/outside your tank.'
        ];
        $month = 1;
        $dayCount = 30;
        switch ($data['period']) {
            case 1:
                $month = 1;
                $dayCount = 30;
                break;
            case 2:
                $month = 3;
                $dayCount = 30 * 3;
                break;
            case 3:
                $month = 6;
                $dayCount = 30 * 6;
                break;
            case 4:
                $month = 12;
                $dayCount = 30 * 12;
                break;
        }

        $date = Carbon::parse($data['date']);
        //$lastDate = $date->addMonth($month)->format('Y-m-d');
        $shedule['plan_id'] = $plan->id;

        $extendDate = $date;
        $count = 1;
        for ($i = 1; $i <= $dayCount; $i++) {
            $tas=null;
            switch ($count) {
                case 1:
                    $tas = $task[5];
                    break;
                case 4:
                    $tas = $task[2];
                    break;
                case 5:
                    $tas = $task[4];
                    break;
                case 7:
                    $tas = $task[1];
                    break;
            }
            if ($i / $month == 30) {
                $tas = $task[3];
            }


            $shedule['task'] = $tas;
            $shedule['date'] = $extendDate->format('Y-m-d');

            if ($tas) {
                $this->shedule->create($shedule);
            }

            if (($i/$month)/15 == 2) {

                $shedule['task'] = $task[6];

                $this->shedule->create($shedule);

                $shedule['task'] = $task[7];
                $this->shedule->create($shedule);

                $shedule['task'] = $task[8];
                $this->shedule->create($shedule);
            }

            $extendDate = $extendDate->addDay($i);

            if ($count == 7) {
                $count = 0;
            }
            $count++;
        }

        return $plan;
    }

    public function getGrowth($id)
    {
        return $this->growth->where('user_id', $id)->get();
    }

    public function avarage()
    {
        $obj = [];
        $plants = $this->plants->get();
        foreach ($plants as $plant) {
            $grow1 = $this->growth
                ->where('plant_id', $plant->id)
                ->orderBy('date', 'ASC')
                ->first();

            $grow2 = $this->growth
                ->where('plant_id', $plant->id)
                ->orderBy('date', 'DESC')
                ->first();


            if ($grow1) {
                $diff =  Carbon::parse($grow1->date)->diffInDays($grow2->date);
                if ($grow1->date == $grow2->date) {
                    $diff = 1;
                }
                $arr = array(
                    'plant' => $plant->name,
                    'diff' => $grow2->height / $diff,
                );
                array_push($obj, $arr);
            }
        }
        return  $obj;
    }



    /**
     * All payment
     */
    public function chartdata()
    {
        $plants = $this->plants->get();

        $collect = collect();

        // return $arra
        $startDate = Carbon::now(); //returns current day
        $user_id = Auth::user()->id;
        foreach ($plants as $plant) {
            $array = [];

            $firstDay = $startDate->format('Y-m-d');
            $sum = $this->growth
                ->where('plant_id', $plant->id)
                ->where('user_id', $user_id)
                ->where('date', $firstDay)->sum('height');
            if ($sum != 0) {
                array_push($array, $sum);
            }


            for ($i = 1; $i < 12; $i++) {
                $firstDay = Carbon::now()->addDays($i)->format('Y-m-d');
                $sum1 = $this->growth
                    ->where('plant_id', $plant->id)
                    ->where('user_id', $user_id)
                    ->where('date', $firstDay)->sum('height');

                if ($sum1 != 0) {
                    $sum = $sum1;
                    array_push($array, $sum1);
                } else {
                    array_push($array, $sum);
                }
            }
            if ($sum != 0) {
                $collect->push($array);
            }
        };
        return $collect;
    }

    public function delete($id)
    {
        return $this->growth->where('id', $id)->delete();
    }
}
