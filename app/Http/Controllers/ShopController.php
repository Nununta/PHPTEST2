<?php

namespace App\Http\Controllers;

use App\User; //追加
use App\Models\Item; //追加
use App\Models\Cart; //追加
use App\Models\Order; //追加
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
        $data = $cart->showCart(); //Cartモデルからの呼び出し
        return view('mycart',$data); //追記変更
    }

    public function addMycart(Request $request,Cart $cart)
   {
        //カートに追加の処理
        $item_id=$request->item_id;
        $orders = $request->orders; 
        $message = $cart->addCart($item_id,$orders);
 
        //追加後の情報を取得
        $data = $cart->showCart();
 
        return view('mycart',$data)->with('message',$message);

   }

   public function deleteCart(Request $request,Cart $cart)
   {

       //カートから削除の処理
       $item_id=$request->item_id;
       $message = $cart->deleteCart($item_id);
       //追加後の情報を取得
       $data = $cart->showCart();

       return view('mycart',$data)->with('message',$message);

   }

   public function checkout(Cart $cart)
   {
    //購入の処理
     $data = $cart->showCart();
     foreach($data['my_carts'] as $my_cart){
        $orders = new Order(); 
        $orders->item_id = $my_cart->item_id;
        $orders->user_id = Auth::id(); //    $my_cart->user_id; こっちの追記でもok
        $orders->order_count = $my_cart->orders;
        $orders->save();

        //購入後の商品在庫の削減
        $items = new Item();
        $items_id = $my_cart->item_id;
        $orders = $my_cart->orders;
        Item::where('id',$items_id)->decrement('stock',$orders);
    }
    //購入後のユーザポイントの削減
    $user_id = Auth::id();
    $user = new User();
    User::where('id', $user_id)->decrement('point',$data['total_price']);
    
    $checkout_info = $cart->checkoutCart(); 
    return view('checkout');
   }

   public function point() {
    return view('pointup');
   }

   public function pointup(Request $request, User $user) {
    $user_id = Auth::id();
    $user_point = $request->point;
    User::where('id',$user_id)->increment('point',$user_point); 
    // User::where('id',$user_id)->update(['point' => $user_point ]);  アップデート処理の場合  
    return redirect('/index')->with('message', 'ポイントが付与されました！');
  }

}
