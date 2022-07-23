<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliceDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'land_phone', 'ref_number', 'user_id','phone',
        'address','province','district','division'
    ];

       /**
     * get user data
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
