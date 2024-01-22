<!DOCTYPE html>
<html>
<head>
    <title>Boutique de vente en ligne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style type="text/css">
        #freecssfooter {
            display: block;
            width: 100%;
            padding: 120px 0 20px;
            overflow: hidden;
            background-color: transparent;
            z-index: 5000;
            text-align: center;
        }

        #freecssfooter div#fcssholder div {
            display: none;
        }

        #freecssfooter div#fcssholder div:first-child {
            display: block;
        }

        #freecssfooter div#fcssholder div:first-child a {
            float: none;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container"><a class="navbar-brand"
                                                             href="https://www.free-css.com/free-css-templates"><span>Giftos</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span>
        </button>
        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
        <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="home">Accueil <span class="sr-only">(current)</span></a></li>
      <li class="nav-item"><a class="nav-link" href="produit">Produit</a></li>
      <li class="nav-item"><a class="nav-link" href="apropos">A propos</a></li>
      <li class="nav-item"><a class="nav-link" href="contact">Contactez Nous</a></li>
    </ul>
            <div class="user_option">
                @guest
                    <a href="login"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                @endguest
                @auth
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </div>
            <a class="btn btn-outline-dark" href="{{ route('shopping.cart') }}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart<span
                        class="badge bg-danger"> {{ count((array) session('cart')) }}</span>
            </a>
            &nbsp; &nbsp;
        
            <a href="{{ route('list-admin') }}">
    <i class="fa fa-user" aria-hidden="true"></i> 
</a>
   &nbsp; &nbsp;
            <form action="#" method="post" class="form-inline">
            </form>
        </div>
    </nav>
</header>

<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <div class="container">
                <table id="cart" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(session('cart'))
                        @php
                            $totalPrice = 0; // Initialisation de la variable du total des prix
                        @endphp
                        @foreach(session('cart') as $id => $details)
                            <tr rowId="{{ $id }}">
                                <td data-th="product">
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs">
                                            <img src="http://test.test/uploads/{{ $details['image'] }}"
                                                 class="card-img-top"/>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="nomargin"></h4>
                                            <!-- Insérez ici d'autres détails du produit si nécessaire -->
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">{{ $details['name'] }}</td>
                                <td data-th="Price">{{ $details['description'] }}</td>
                                <td data-th="Price">{{ $details['prix'] }}dt</td>
                                <td class="actions">
                                    <a href="delete-cart-product/{{$id}}"> <button class="btn btn-danger"><i class="fa fa-trash"></i></button> </a>
                                </td>
                                @php
                                    $totalPrice += $details['prix']; // Ajoute le prix du produit actuel au total
                                @endphp
                            </tr>
                        @endforeach
                        <tr>
                            <td class="actions"></td>
                            <td class="actions"></td>
                            <td class="actions">Total:</td>
                            <td class="actions">{{ $totalPrice }}dt</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
    <div class="col-12 text-center">
        <a href="produit" class="btn btn-primary">Passer la Commande</a>
    </div>
</div>
</section>
<script>
    // Fonction pour afficher l'alerte
    function showConfirmationAlert() {
        alert("Votre commande a été placée avec succès. Merci, vous pouvez compter sur nous.");
    }

    // Ajoutez un gestionnaire d'événements au bouton "Passer la Commande"
    document.querySelector(".btn-primary").addEventListener("click", showConfirmationAlert);
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
