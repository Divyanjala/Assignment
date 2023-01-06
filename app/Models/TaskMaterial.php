<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskMaterial extends Model
{
    use HasFactory;
    protected $fillable = [
        'qty','item_id',
        'task_id'
    ];
}
