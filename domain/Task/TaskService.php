<?php

namespace domain\Task;

use App\Models\Department;
use App\Models\Employee;
use App\Models\InventoryItem;
use App\Models\Task;
use App\Models\TaskMaterial;
use App\Models\Unit;
use Illuminate\Support\Facades\Auth;

/**
 * Created by Vs COde.
 * Date: 05/07/2022
 * Time: 07:10 PM
 */
class TaskService
{

    protected $task;
    protected $material;
    protected $task_material;
    protected $department;
    protected $unit;
    protected $emp;

    public function __construct()
    {
        $this->task = new Task();
        $this->unit = new Unit();
        $this->emp = new Employee();
        $this->department = new Department();
        $this->material = new InventoryItem();
        $this->task_material = new TaskMaterial();
    }

    /**
     * All task
     */
    public function all()
    {
        return $this->task->orderBy('id', 'desc')->get();
    }

       /**
     * All task
     */
    public function allByOrder($id)
    {
        return $this->task->where('store_id',$id)->orderBy('id', 'desc')->get();
    }
        /**
     * All task
     */
    public function departments()
    {
        return $this->department->orderBy('id', 'desc')->get();
    }

    /**
     * All unit
     */
    public function units()
    {
        return $this->unit->orderBy('id', 'desc')->get();
    }

        /**
     * All task
     */
    public function taskPercentage()
    {
       $complete= $this->task->where('task_status',2)->count();
       $all= $this->task->count();
       return $complete?round(($complete/$all)*100,2):0;
    }

           /**
     * All task
     */
    public function taskPending()
    {
       return $this->task->where('task_status',0)->count();
    }
    /**
     * get task
     */
    public function get($id)
    {
        return $this->task->find($id);
    }

       /**
     * Make user Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {

        $count=count($data['item_id']);
        $data['created_by']=Auth::user()->id;
        $data['status']=Task::STATUS['PENDING'];
        $task= $this->task->create($data);
        $this->task->where('id',$task->id)->update(['task_code'=>'TSK'.(string)$task->id]);

        for ($i=0; $i < $count ; $i++) {

           $obj=[
            'qty'=>$data['qty'][$i],
            'item_id'=>$data['item_id'][$i],
            'task_id'=>$task->id
           ];
           $mat=$this->material->find($data['item_id'][$i]);
           if ($mat) {
              $newQty= $mat->avg_qty-$data['qty'][$i];
              $this->material->where('id',$mat->id)->update(['avg_qty'=>$newQty]);
           }
           $this->task_material->create($obj);
        }

        return $task;
    }

    public function assign($data)
    {
        $emp=$this->emp->find($data['emp_id']);
        $unit= $this->unit->find($emp->unit_id);
        $qty= $unit->use_space+1;

        $this->unit->where('id',$emp->unit_id)->update(['use_space'=>$qty]);
        $this->task->where('id',$data['task_id'])->update([
            'start_date'=>$data['start_date'],
            'emp_id'=>$data['emp_id'],
            'task_status'=>Task::STATUS['ASSIGNED']
        ]);
    }

    public function complete($data)
    {

        $task= $this->task->find($data['task_id']);
    
        $emp=$this->emp->find($task->emp_id);

        $unit= $this->unit->find($emp->unit_id);

        $qty= $unit->use_space-1;

        $this->unit->where('id',$emp->unit_id)->update(['use_space'=>$qty]);

        $this->task->where('id',$data['task_id'])->update([
            'end_date'=>$data['end_date'],
            'spd_time'=>$data['spd_time'],
            'task_status'=>Task::STATUS['COMPLETED']
        ]);
    }



        /**
     * Make user Array
     * @param array $data
     * @return mixed
     */
    public function makeUnit($data)
    {
        $unit= $this->unit->create($data);
        $employee= $this->unit->where('id',$unit->id)->update(['code'=>'#'.(string)$unit->id.'UNIT']);
        return $employee;
    }
}
