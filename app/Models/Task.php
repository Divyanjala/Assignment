<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    const STATUS = ['PENDING' => 0,  'ASSIGNED' => 1 ,'COMPLETED' => 2];

    protected $fillable = [
        'task_name','spd_time','des',
        'task_code','start_date','end_date','emp_id',
        'ast_time','task_status','store_id'
    ];

    public function emp()
    {
        return $this->belongsTo(Employee::class, 'emp_id');
    }
}
