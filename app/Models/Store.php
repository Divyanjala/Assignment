<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    const TYPES = ['PRODUCT' => 0,  'MATERIAL' => 1];
    const INOUTSTATUS = ['IN' => 0,  'OUT' => 1];
    const STATUS = ['PENDING' => 0,  'APPROVED' => 1];

    protected $fillable = [
        'item_id','created_by','qty',
        'des','status','approved_by',
        'type','in_out_status','date','product_id'
    ];

    public function item()
    {
        return $this->belongsTo(InventoryItem::class, 'item_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function approve()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
