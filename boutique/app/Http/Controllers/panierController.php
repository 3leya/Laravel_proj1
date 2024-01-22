<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panier;
use App\Models\Client; 
use App\Models\Produit;

class panierController extends Controller
{
    public function afficherPanier()
    {
        $cartItems = Panier::select('paniers.*', 'clients.id as id_client', 'produits.id as id_produit')
        ->join('clients', 'paniers.id_client', '=', 'clients.id')
        ->join('produits', 'paniers.id_produit', '=', 'produits.id')
        ->get();

        return view('panier', ['cartItems' => $cartItems]);


}
}
