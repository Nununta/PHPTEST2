
@extends('layouts.app')

@section('content')
<link href="{{ asset('css/yi.css') }}" rel="stylesheet">
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 class="text-center font-weight-bold" style="color:#555555;  font-size:1.2em; padding:24px 0px;">
           {{ Auth::user()->name }}さんのカートの中身</h1>
       

           <div class="">
                    <p class="text-center">{{ $message ?? '' }}</p><br>
     

                   @foreach($my_carts as $mycart)
                     <h1>{{$mycart->item->name}}　                             
                     {{ number_format($mycart->item->point)}}ポイント</h1> <br>
                     <img src="/image/{{$mycart->item->image}}" alt="" class="incart_cart" >                     
                     <br>
                     <h2>注文数{{$mycart->orders}}</h2>
                        <form action="/cartdelete" method="post">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $mycart->item->id }}">
                            <input type="submit" value="カートから削除する">
                        </form>
                   @endforeach
                   {{-- 追加 --}}
                   <div class="text-center p-2">
                       <h2>個数：{{$total_count}}個</h2>
                       <h2>合計金額:{{$total_price}}ポイント</h2>
                   </div>  
                   <form action="/checkout" method="POST">
                       @csrf
                       <button type="submit" class="btn btn-danger btn-lg text-center buy-btn" >購入する</button>
                   </form>

                    {{-- ここまで --}}

         

               <a href="/index">商品一覧へ</a>
           </div>
       </div>
   </div>
</div>
@endsection