<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Session;

class ProduitController extends Controller
{
    public function getProduit()
    {
        $produit = Produit::All();
        return view("produit", ['dataa' => $produit]);

    }
    public function bookcart(){

        return view("panier");
     }

    public function addBooktoCart ($id)
{
            $produit = Produit ::findorFail ($id);
             $cart = session ()->get( 'cart', []);
           if(isset($cart[$id])) {
                $cart [$id] ['quantite'] ++;
                   } else {
               $cart [$id] = [
              "name" => $produit->nom,
              "description" => $produit->description,
              "image" => $produit->image,
              "quantite" => 1,
              "prix" => $produit->prix,
                             ];
 }
            session()->put('cart', $cart);
            return redirect()->back()->with('success', '"Le produit a été ajouté au panier !"');
}
 
public function deleteProduct($id)
{
    // Vérifier si le produit existe dans le panier
    if(session()->has('cart') && array_key_exists($id, session('cart'))) {
        $cart = session('cart');
        unset($cart[$id]);
        session(['cart' => $cart]);
    
        // Display an alert
        echo '<script>alert("test");</script>';
    
        session()->flash('success', 'Le produit a été bien supprimé.');
    } else {
        session()->flash('error', '"Produit introuvable dans le panier.".');
    }
    

    // Rediriger vers la page du panier
    return redirect('/panier');
}


//public function confirmationPage()
//{
    // Logique pour afficher la page de confirmation
  //  return view('produit');
//}

//public function resetCart()
//{
    // Supprimez la session du panier pour le réinitialiser
  //  Session::forget('cart');
    
    // Redirigez l'utilisateur vers une page de confirmation ou ailleurs selon vos besoins
    //return redirect()->route('confirmation-page');
//}
}

