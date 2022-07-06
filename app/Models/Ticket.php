<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'cus_name', 'pro_description', 'email',
        'phone_number','ref_number','status','agent_id'
    ];
}
