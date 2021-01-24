<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'item_id', 'user_id','orders',
    ];

    public function showCart()
    {
        $user_id = Auth::id();
        return $this->where('user_id',$user_id)->get();
    }
    
    public function addCart($item_id,$orders)
    {
        $user_id = Auth::id(); 
        $cart_add_info = Cart::firstOrCreate(['item_id' => $item_id,'user_id' => $user_id,'orders' => $orders]);
 
        if($cart_add_info->wasRecentlyCreated){
            $message = 'カートに追加しました';
        }
        else{
            $message = 'カートに登録済みです';
        }
 
        return $message;
    }


    public function item()
    {
        return $this->belongsTo('\App\Models\Item');
    }

}


