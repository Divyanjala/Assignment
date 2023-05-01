<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthPlanShedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'status','date','task','plan_id'
    ];
}
