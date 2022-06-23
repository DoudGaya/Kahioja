<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'user_id', 'vendor_id', 'user_type', 'quantity', 'paid', 'order_no', 'amount','ship_fee','logistics_id','status'
    ];
    
}
