<!DOCTYPE html>
<html>
<head>
    <title>Panier</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Panier</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Client ID</th>
                    <th>Produit ID</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($cartItems as $item)
    <tr>
        <td><img src="{{ asset($item->image) }}" alt="{{ $item->nom }}" width="100"></td>
        <td>{{ $item->nom }}</td>
        <td>{{ $item->description }}</td>
        <td>${{ $item->prix }}</td>
        <td>Client ID: {{ $item->id_client }}</td>
        <td>Produit ID: {{ $item->id_produit }}</td>
    </tr>
@endforeach

            </tbody>
        </table>

        @foreach ($cartItems as $item)
    <div class="img-box"><img src="{{ asset($item->image) }}" alt="{{ $item->nom }}"></div>
    <div class="detail-box">
        <h6>{{ $item->nom }}</h6>
        <h6>{{ $item->description }}</h6>
        <h6>Price<span>${{ $item->prix }}</span></h6>
    </div>
            <form action="/panier" method="post">
                @csrf <!-- Ajoutez un jeton CSRF pour protéger le formulaire -->
                <input type="hidden" name="product_id" value="{{ $item->id_produit }}">
                <button class="btn btn-primary add-to-cart-btn" type="submit">Add to Cart</button>
            </form>
        @endforeach
    </div>
</body>
</html>




