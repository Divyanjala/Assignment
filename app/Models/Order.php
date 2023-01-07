<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const STATUS = ['PENDING' => 0,  'APPROVED' => 1];
    protected $fillable = [
        'des','status','customer_id','amount','paid_amount',
        'issue_date','created_by','approved_by'
    ];

    public function approve()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    // public function createUser()
    // {
    //     return $this->belongsTo(User::class, 'created_by');
    // }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function orderItems(){
        return $this->hasMany(OrderItems::class,'order_id');
    }

    public function items(){
        return $this->hasMany(Store::class,'order_id');
    }

    public function payments(){
        return $this->hasMany(Payment::class,'order_id');
    }
}
