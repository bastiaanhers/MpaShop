@extends('layout.app')

@section('content')
 <!-- Page Content -->
 <div class="container">

   
      <div class="col-lg-9">

        <div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-40">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-t phpitle">
                      <a>{{$product()->name}}</a>
                      </h4>
                    <h5>{{$product()->price}}</h5>
                    <p class="">{{$product()->description}}</p>
                    </div>
                    <button class="button" href="{{route('product.addToCart',$product->id)}}">Add to cart</button>
                  </div>
                </div>
              </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
