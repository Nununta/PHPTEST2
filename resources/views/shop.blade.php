@extends('layouts.app')

@section('content')
<!-- <div class="container-fluid"> -->
   <!-- <div class="">
       <div class="mx-auto" style="max-width:1200px"> -->
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
           <!-- <div class=""> -->
               <!-- <div class="d-flex flex-row flex-wrap"> -->
            <div class="container">
            <div class="row">
                   @foreach($items as $item)
                   
                       <div class="col-4 item_card"> 
                           <p id="item_name">{{$item->name}}</p>
                           <div class="row">
                                <p class="col-8" id="item_point">{{$item->point}}ポイント</p>
                                <p class="col-4" id="item_stock">{{$item->stock}}在庫</p>
                            </div>
                            <img src="/image/{{$item->image}}" alt="" class="incart" >
                            {{$item->content}} <br>
                                <form action="mycart" method="post">
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                                    <input type="text" name="orders" value="0"> 
                                    <input type="submit" value="カートに入れる">
                                </form>
                        </div>
                       
                    @endforeach
                    </div>
                    {{$items->links()}} 

            </div>   <!-- </div>
           </div> -->
       <!-- </div>
   </div> -->
<!-- </div> -->
@endsection