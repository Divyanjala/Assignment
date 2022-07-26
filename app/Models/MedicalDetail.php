<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'birthday', 'hight', 'weight','blood_pressure','em_address',
        'cholestreol','blood_type','mr_status','em_name','em_phone','user_id'
    ];
}
