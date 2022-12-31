<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'des','status','name','code',
        'created_by','approved_by'
    ];

    public function approve()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
