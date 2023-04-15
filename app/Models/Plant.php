<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;
    protected $fillable = [
        'des','status','name','code','price'
    ];

    public function approve()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
