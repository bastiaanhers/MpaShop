@extends('layout.app')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">
        

            <div class="col-lg-9">
                @if(!empty($cart))
                    @foreach ($cart->items as $item)
                        @foreach ($products as $product)
                            @if ($product->id == $item['itemId'])
                            <p>{{$product->name}}</p>
                            <p>{{$item['amount']}}</p>
                            <p>Total Price</p>
                            <p>{{$item['amount'] * $product->price}}</p>
                            @endif
                        @endforeach
                    @endforeach
                    @else
                    <h1> Cart Empty Ma Dude</h1>
                @endif
            </div>
                <!-- /.col-lg-9 -->
        
        </div>
            <!-- /.row -->
        
    </div>
            <!-- /.container -->

