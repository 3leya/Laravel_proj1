<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<style>
  .card {
    width: 200px; /* Set a fixed width for the card */
    height: 300px; /* Set a fixed height for the card */
    margin: 5px;
    padding: 10px;
    background-color: #fff;
    position: relative; /* Allow positioning of the button */
  }

  .card img {
    width: 100%; /* Make the image fill the entire card width */
    height: 60%; /* Adjust the height to maintain the card's aspect ratio */
    object-fit: cover;
  }

  .card-body {
    position: absolute;
    bottom: 10px; /* Adjust the distance from the bottom */
    left: 10px; /* Adjust the distance from the left */
    right: 10px; /* Adjust the distance from the right */
    text-align: center; /* Center-align text and button */
  }

  .card-button {
    display: block;
    margin-top: 10px;
  }
</style>


<title>Boutique de vente en ligne</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<style type="text/css">
#freecssfooter{display:block;width:100%;padding:120px 0 20px;overflow:hidden;background-color:transparent;z-index:5000;text-align:center;}
#freecssfooter div#fcssholder div{display:none;}
#freecssfooter div#fcssholder div:first-child{display:block;}
#freecssfooter div#fcssholder div:first-child a{float:none;margin:0 auto;}
</style></head>
<body>
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '../../../../../../../../s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<div class="hero_area">
  <header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container"><a class="navbar-brand" href=""><span>Giftos</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span></button>
      <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
      <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="home">Accueil <span class="sr-only">(current)</span></a></li>
      <li class="nav-item"><a class="nav-link" href="produit">Produit</a></li>
      <li class="nav-item"><a class="nav-link" href="apropos">A propos</a></li>
      <li class="nav-item"><a class="nav-link" href="contact">Contactez Nous</a></li>
    </ul>
    <div class="user_option">
      @guest
    <a href="login">
        <span>Login</span>
    </a>
    @endguest
    @auth
    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    @endauth

 </div>
    <a href="{{ route('list-admin') }}">
    <i class="fa fa-user" aria-hidden="true"></i> 
</a>
   &nbsp; &nbsp; 
        <a class="btn btn-outline-dark" href="{{ route ('shopping.cart') }}">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart<span class="badge bg-danger"> {{ count ((array) session ('cart')) }}</span>
      <a>
      </div></div>
      
    </nav>
  </header>
</div>
<section class="shop_section layout_padding _next" >
    <div class="container">
        <div class="heading_container text-center">
            <h1>Produits</h1>

            <div class="row">
                @foreach ($dataa as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="http://test.test/uploads/{{ $product->image }}" alt="{{ $product->nom }}">
                            <div class="card-body">
                                
                                <p class="card-text">Prix: {{ $product->prix }} dt</p>

                                <!-- Add to Cart button -->
                                <form action="{{ route('add-to-cart', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container mt-4">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</section>
@yield('scripts')

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/custom.js"></script>
<div id="freecssfooter">
  <div id="fcssholder">
    <div id="bsap_2365" class="bsarocks bsap_b893e54e42ad5b76e7b252f59be18e67"></div>
  </div>
</div>
<script type="text/javascript">
  (function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '../../../../../../../../s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
var gaProperty = 'UA-120201777-1';var disableStr = 'ga-disable-' + gaProperty;if (document.cookie.indexOf(disableStr + '=true') > -1) {window[disableStr] = true;}
function gaOptout(){document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2045 23:59:59 UTC; path=/';window[disableStr] = true;alert('Google Tracking has been deactivated');}
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../../../../../../../../www.google-analytics.com/analytics.js','ga');ga('create', 'UA-120201777-1', 'auto');ga('set', 'anonymizeIp', true);ga('send', 'pageview');
</script>
</body>
</html>