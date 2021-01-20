@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
           <div class="">
               <div class="d-flex flex-row flex-wrap">
                   商品一覧を出したい

                   @foreach($items as $item)
                      {{$item->name}} <br>
                      {{$item->point}}ポイント<br>
                      {{$item->stock}}在庫<br>
                      <img src="/image/{{$item->image}}" alt="" class="incart" >
                      <br>
                      {{$item->content}} <br>
                      {{-- 追加 --}}

                        <form action="mycart" method="post">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                            <input type="submit" value="カートに入れる">
                        </form>

                        {{-- ここまで --}}
                        </div>

                        {{-- 追加 --}}
                        <a class="text-center" href="/">商品一覧へ</a>
                        {{-- ここまで --}}  
                    @endforeach
                    {{$items->links()}} 

               </div>
           </div>
       </div>
   </div>
</div>
@endsection