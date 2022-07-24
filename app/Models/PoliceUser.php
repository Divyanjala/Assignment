<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliceUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'nic', 'code','mobile',
        'address'
    ];
}
