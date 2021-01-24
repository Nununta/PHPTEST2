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

    public function myCart(Cart $cart) //追加
    {
        $my_carts = $cart->showCart(); //Cartモデルからの呼び出し
        return view('mycart',compact('my_carts')); //追記変更
    }

    public function addMycart(Request $request,Cart $cart)
   {
        //カートに追加の処理
        $item_id=$request->item_id;
        $orders = $request->orders; 
        $message = $cart->addCart($item_id,$orders);
 
        //追加後の情報を取得
        $my_carts = $cart->showCart();
 
        return view('mycart',compact('my_carts' , 'message'));

   }

}
