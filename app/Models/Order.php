<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'item_id', 'user_id','order_count',
    ];

    public function order()
    {
        return $this->belongsTo('\App\Models\Item');
    }
}
