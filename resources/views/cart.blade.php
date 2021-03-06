@extends('layout.app')

@section('content')

<?php $totalPrice = 0?>
    <!-- Page Content -->
    <div class="container">
        @if(!empty($cart->items))
        <div class="row">
            <div class="col-lg-3">
                <p>Item Name</p>
            </div>
            <div class="col-lg-3">
                <p>Price</p>
            </div>
            <div class="col-lg-3">
                <p>amount</p>
            </div>
            <div class="col-lg-2">
                <p>total Price</p>
            </div>
            <div class="col-lg-1">
                <p>delete</p>
            </div>
        </div>
        @foreach ($cart->items as $item)
            @foreach ($products as $product)
                @if ($product->id == $item['itemId'])
                <div class="row">
                    <div class="col-lg-3">
                        <p>{{$product->name}}</p>
                    </div>
                    <div class="col-lg-3">
                        <p>{{$product->price}}</p>
                    </div>
                    <div class="col-lg-3">
                    <input onchange="window.location.href= '/cart/editItem/'+{{$item['itemId']}}+'/'+this.value" type="number" name="amount" min="0" value="{{$item['amount']}}">                     
                    </div>
                    <div class="col-lg-2">
                        <p><?php $total1 = $item['amount'] * $product->price; echo($total1); $totalPrice = $totalPrice+$total1; ?></p>
                    </div>
                    <div class="col-lg-1">
                        <a href="/cart/delete/{{$item['itemId']}}">Del</a>
                    </div>
                </div>
                @endif
            @endforeach
        @endforeach
        <div class="row">
            <div class="col-lg-4">
                <p><b>Total Price: </b>{{$totalPrice}}</p>
            </div>

        </div>
        @if(Auth::check())
        <div class="row">
            <div class="col-lg-4">
                <a class="nav-link" href="{{route('order.create')}}">order create               
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-lg-2">
                <p>You need to be signed in to Order</p>
            </div>
            <div class="col-lg-1">
                <a class="nav-link" href="{{route('user.getLogin')}}">Login
                 <a class="nav-link" href="{{route('user.getRegister')}}">Register
            </div>
        </div> 
        @endif
        @else
        <h1> Cart Empty Ma Dude</h1>
        @endif

        
    </div>
            <!-- /.container -->

