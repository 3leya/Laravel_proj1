<!DOCTYPE html>
<html>
<head>
    <title>Commande</title>
    <!-- Ajoutez les liens vers les fichiers CSS et JavaScript nécessaires -->
</head>
<body>
    <div class="container">
        <h1>Commande</h1>

        <!-- Affichez les détails de la commande ici, tels que les produits, quantité, prix, etc. -->

        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
<!-- Ajoutez le tableau de produits à votre page de commande -->
<table class="table">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order['items'] as $item)
        <tr>
            <td>{{ $item['product_name'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>{{ $item['unit_price'] }}$</td>
            <td>{{ $item['total_price'] }}$</td>
        </tr>
        @endforeach
    </tbody>
</table>
            </tbody>
        </table>

        <!-- Ajoutez d'autres détails de la commande, tels que l'adresse de livraison, les informations du client, etc. -->

        <hr>

        <h4>Total de la commande : $XXX</h4>

        <!-- Générez le QR code en utilisant une bibliothèque JavaScript, par exemple, QRCode.js -->

        <div id="qrcode"></div>

        <button class="btn btn-primary">Confirmer la Commande</button>
    </div>

    <!-- Incluez les fichiers JavaScript pour générer le QR code ici -->

</body>
</html>
