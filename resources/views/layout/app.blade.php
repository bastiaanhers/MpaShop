<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Mpa webshop</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/shop-homepage.css" rel="stylesheet">

  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Mpa Webshop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="{{route('cart.view')}}">Cart
              <?php use App\Cart; $totalAmount=0; $cart = new Cart; $cartItems = $cart->items; foreach ($cartItems as $item) {
                $totalAmount = $totalAmount + $item['amount'];
              } ?>
            <span class="badge">{{$totalAmount}}</span>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="{{route('user.getLogin')}}">Login
                <span class="sr-only">(current)</span>
              </a>
            </li>            
            <li class="nav-item">
            <a class="nav-link" href="{{route('user.getRegister')}}">Register
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li role="separator" class="divider"></li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('user.logout')}}">logout
                    <span class="sr-only">(current)</span>
                  </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <main>
        @yield('content')
    </main>

    <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
        </div>
        <!-- /.container -->
      </footer>
  
      <!-- Bootstrap core JavaScript -->
      <script href="{{asset("vender/jquery/jquery.min.js")}}"></script>
      <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    </body>
  
  </html>
  