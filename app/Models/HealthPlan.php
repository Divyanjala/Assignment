<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'dec','status','tank_name','date',
        'height','width','period','user_id'
    ];
}
