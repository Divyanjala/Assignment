<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','level','email',
        'address','tel',
        'code','user_role',
        'status','created_by','updated_by'
    ];
}
