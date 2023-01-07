<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    const FACTORY = ['FACTORY 1' => 0,  'FACTORY 2' => 1 ,'FACTORY 3' => 2];
    protected $fillable = [
        'name','space','use_space',
        'status',
        'department_id','factory'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
