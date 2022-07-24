<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFine extends Model
{
    use HasFactory;
    protected $fillable = [
        'licence_number', 'fine_id', 'police_id','amount',
        'date','expire_date','status','licence_status','police_user_id'
    ];

          /**
     * get fine data
     *
     * @return void
     */
    public function fine()
    {
        return $this->belongsTo(Fine::class, 'fine_id');
    }


          /**
     * get policemen data
     *
     * @return void
     */
    public function police()
    {
        return $this->belongsTo(PoliceUser::class, 'police_user_id');
    }
}
