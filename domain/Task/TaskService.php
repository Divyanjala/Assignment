<?php

namespace domain\Task;

use App\Models\InventoryItem;
use App\Models\Task;
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

    public function __construct()
    {
        $this->task = new Task();
        $this->material = new InventoryItem();
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
     * Make item Array
     * @param array $data
     * @return mixed
     */
    public function make($data)
    {
        $data['created_by']=Auth::user()->id;
        $data['status']=Task::STATUS['PENDING'];

        $task= $this->task->create($data);
        $task= $this->task->where('id',$task->id)->update(['code'=>'PRO'.(string)$task->id]);
        return $task;
    }
}
