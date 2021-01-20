<?php

namespace App\Http\Controllers;

use App\Models\Item; //追加
use App\Models\Cart; //追加
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index() //追加
    {
        $items = Item::Paginate(6); //Eloquantで検索
        return view('shop',compact('items')); //追記変更
    }

    public function myCart() //追加
    {
        $mycarts = Cart::all(); //Eloquantで検索
        return view('mycart',compact('mycarts')); //追記変更
    }

    public function addMycart(Request $request)
   {
       $user_id = Auth::id(); 
       $item_id=$request->item_id;

       $cart_add_info=Cart::firstOrCreate(['item_id' => $item_id,'user_id' => $user_id]);

       if($cart_add_info->wasRecentlyCreated){
           $message = 'カートに追加しました';
       }
       else{
           $message = 'カートに登録済みです';
       }

       $mycarts = Cart::where('user_id',$user_id)->get();

       return view('mycart',compact('mycarts' , 'message'));

   }

}
