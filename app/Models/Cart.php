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
        $data['my_carts'] = $this->where('user_id',$user_id)->get();
 
        $data['count']=0;
        $data['sum']=0;
        $data['total_count']=0;
        $data['total_price'] = 0;
        
        foreach($data['my_carts'] as $my_cart){
            $data['count']++;
            $data['total_price'] +=$my_cart->item->point*$my_cart->orders;
            $data['total_count'] += $my_cart->orders; 
            $data['sum'] += $my_cart->item->point;
        }
        dump($data['total_count']);
        return $data;
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

    public function deleteCart($item_id)
{
       $user_id = Auth::id(); 
       $delete = $this->where('user_id', $user_id)->where('item_id',$item_id)->delete();
       
       if($delete > 0){
           $message = 'カートから一つの商品を削除しました';
       }else{
           $message = '削除に失敗しました';
       }
       return $message;
}


    public function item()
    {
        return $this->belongsTo('\App\Models\Item');
    }

    

}


