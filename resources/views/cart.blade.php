@extends('layout.app')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">
        

            <div class="col-lg-9">
                @if($cart)
                    @foreach ($cart->items as $item)
                    <pre>
                    <?php $item['price'] =12.78; var_dump($item)?>
                    </pre>
                        <br><br>
                    @endforeach
                @endif

            </div>
                <!-- /.col-lg-9 -->
        
        </div>
            <!-- /.row -->
        
    </div>
            <!-- /.container -->

