<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrowthRate extends Model
{
    use HasFactory;
    protected $fillable = [
        'plant_id','date','height','user_id'
    ];

    public function plant()
    {
        return $this->belongsTo(Plant::class, 'plant_id');
    }
}
