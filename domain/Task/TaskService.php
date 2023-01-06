<?php

namespace domain\Task;

use App\Models\InventoryItem;
use App\Models\Task;
use App\Models\TaskMaterial;
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

    public function __construct()
    {
        $this->task = new Task();
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
           $this->task_material->create($obj);
        }

        return $task;
    }

    public function assign($data)
    {
        $this->task->where('id',$data['task_id'])->update([
            'start_date'=>$data['start_date'],
            'emp_id'=>$data['emp_id'],
            'task_status'=>Task::STATUS['ASSIGNED']
        ]);
    }

    public function complete($data)
    {
      
        $this->task->where('id',$data['task_id'])->update([
            'end_date'=>$data['end_date'],
            'spd_time'=>$data['spd_time'],
            'task_status'=>Task::STATUS['COMPLETED']
        ]);
    }
}