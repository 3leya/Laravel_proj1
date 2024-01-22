<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>About us</title>
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
    <nav class="navbar navbar-expand-lg custom_nav-container"><a class="navbar-brand" href="https://www.free-css.com/free-css-templates"><span>Giftos</span></a>
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
</a><a href="https://www.free-css.com/free-css-templates"><i class="" aria-hidden="true"></i></a>
          <form action="#" method="post" class="form-inline">
            <button class="btn nav_search-btn" type="submit"><i class="" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
    </nav>
  </header>
</div>
<section class="contact_section layout_padding">
  <div class="container px-0">
    <div class="heading_container">
      <h2>Contact Us</h2>
    </div>
  </div>
  <div class="container container-bg">
  <div class="row justify-content-center align-items-center">
  <div class="">
    <div class="map_container">
      <div class="map-responsive">
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-5 ">
  <form action="/AddContact" method="post" class="centered-form">
    @csrf

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Nom" name="nom">
        @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <input type="email" class="form-control" placeholder="Email" name="email">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Sujet" name="sujet">
        @error('sujet')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <input type="text" class="form-control message-box" placeholder="Message" name="message">
        @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">SEND</button>
    </div>
</form>

  </div>
</div>

  </div>
</section>


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
var gaProperty = 'UA-120201777-1';var disableStr = 'ga-disable-' + gaProperty;if (document.cookie.indexOf(disableStr + '=true') > -1) {window[disableStr] = true;}
function gaOptout(){document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2045 23:59:59 UTC; path=/';window[disableStr] = true;alert('Google Tracking has been deactivated');}
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../../../../../../../../www.google-analytics.com/analytics.js','ga');ga('create', 'UA-120201777-1', 'auto');ga('set', 'anonymizeIp', true);ga('send', 'pageview');
</script>
</body>

</html>