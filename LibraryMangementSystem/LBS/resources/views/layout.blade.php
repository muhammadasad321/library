<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty NFT Marketplace - HTML CSS Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontendasset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('frontendasset/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontendasset/css/templatemo-liberty-market.css')}}">
    <link rel="stylesheet" href="{{asset('frontendasset/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('frontendasset/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css')}}"/>
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{url('/')}}" class="logo">
                        <img src="{{asset('frontendasset/images/logo.png')}}" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{url('/')}}" class="active">Home</a></li>
                        <li><a href="{{url('explore')}}">Explore</a></li>
                        <li><a href="{{url('request')}}">Requests</a></li>
                        @if(Session::get('name'))
                        <li><a href="">Welcome, {{Session::get('name')}}</a></li>
                        <li><a href="{{url('logout')}}">Logout</a></li>
                        @else
                        <li><a href="{{url('login')}}">Login</a></li>
                        <li><a href="{{url('signup')}}">Signup</a></li>
                        @endif
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->

  <!-- ***** Main Banner Area End ***** -->
  
 @yield('index')
 @yield('explore')
 @yield('categories')
 @yield('search')
 @yield('book')
 @yield('login')
 @yield('signup')
 @yield('request')
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 <a target="_blank" href="https://www.youtube.com/channel/UCQlLnvuahfTkz-x78M_46Uw">Project Bca
          &nbsp;&nbsp;
          Designed by <a title="HTML CSS Templates" rel="sponsored" href="https://www.youtube.com/channel/UCQlLnvuahfTkz-x78M_46Uw" target="_blank">Project Bca</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontendasset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontendasset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('frontendasset/js/isotope.min.js')}}"></script>
  <script src="{{asset('frontendasset/js/owl-carousel.js')}}"></script>

  <script src="{{asset('frontendasset/js/tabs.js')}}"></script>
  <script src="{{asset('frontendasset/js/popup.js')}}"></script>
  <script src="{{asset('frontendasset/js/custom.js')}}"></script>

  </body>
</html>