@extends('layout.app')

@section('content')
    <!-- Page Content -->
    <div class="container">

            <div class="row">
      
              <div class="col-lg-3">
      
                <h1 class="my-4">Shop Name</h1>
                <div class="list-group">
                  @foreach ($catagories as $catagory)
                  <a href="/catagory/{{$catagory->id}}" class="list-group-item">{{$catagory->name}}</a>
                  @endforeach
                </div>
      
              </div>
              <!-- /.col-lg-3 -->
      
              <div class="col-lg-9">
      
                <div class="row">
                  @foreach($products as $product)
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-40">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <a href="/product/{{$product->id}}">{{$product->name}}</a>
                        </h4>
                        <h5>$24.99</h5>
                      <p class="card-text">{{$product->description}}</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
                  </div>
                  @endforeach
      
                </div>
                <!-- /.row -->
      
              </div>
              <!-- /.col-lg-9 -->
      
            </div>
            <!-- /.row -->
      
          </div>
          <!-- /.container -->
      