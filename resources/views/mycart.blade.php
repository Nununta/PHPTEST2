@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 class="text-center font-weight-bold" style="color:#555555;  font-size:1.2em; padding:24px 0px;">
           {{ Auth::user()->name }}さんのカートの中身</h1>

           <div class="">
               <p class="text-center">{{ $message }}</p><br>
               <div class="d-flex flex-row flex-wrap">

                   @foreach($mycarts as $mycart)
                       <div class="mycart_box">
                           <p>ユーザーID：{{$mycart->user_id}}</p>
                           <p>ストックID：{{$mycart->item_id}}</p>
                       </div>
                   @endforeach

               </div>

               <a href="/">商品一覧へ</a>
           </div>
       </div>
   </div>
</div>
@endsection