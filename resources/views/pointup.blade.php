@extends('layouts.app')
@section('content')
<p class="text-center">{{ $message ?? '' }}</p><br>
<link rel="stylesheet" href="{{ asset('css/yi.css') }}">
<div class="container-fluid">
    <div class="mx-auto" style="max-width:1200px">
        <h1 class="text-center" style="font-size:30px;">{{ Auth::user()->name }}さんへのポイント付与画面</h1>
    </div>
    <div class="pointform">
    <form action="/pointup" method="post">
    @csrf
        <div class="row">
            <button class="col-4 mt-5" type="submit" value=1 name="point">1P</button>
            <button class="col-4 mt-5" type="submit" value=10 name="point">10P</button>
            <button class="col-4 mt-5" type="submit" value=100 name="point">100P</button>       
        </div>
    </form>
    </div>
</div>



@endsection