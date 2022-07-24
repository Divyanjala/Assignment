<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFine extends Model
{
    use HasFactory;
    protected $fillable = [
        'licence_number', 'fine_id', 'police_id','amount',
        'date','expire_date','status','licence_status'
    ];
}
