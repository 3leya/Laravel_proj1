<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function getProduit()
    {
        $produit = Produit::All();
        return view("list-produit", ['dataa' => $produit]);
    }
    public function SuppProduit($id)
{
    // Trouver l'produit à supprimer
    $produit = Produit::find($id);
    
    if ($produit) {
        // Supprimer  le produitr de la base de données
        $produit->delete();
    }

    // Rediriger vers la liste des aproduit
    return redirect('/list-produit');
}
public function AddProduit(Request $req)
 {
    // Valider les données du formulaire
    $req->validate([
        'nom' => 'required|string',
        'description' => 'required|string',
        'categorie' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ajoutez des règles d'image selon vos besoins
        'quantite' => 'required|integer',
        'prix' => 'required|numeric',
    ]);

    // Créer une nouvelle instance de Produit
    $produit = new Produit;

    // Traiter le téléchargement de l'image
    if ($req->file('image')) {
        $file = $req->file('image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);

        // Assigner les valeurs aux attributs du produit
        $produit->nom = $req->nom;
        $produit->description = $req->description;
        $produit->categorie = $req->categorie;
        $produit->image = $filename;
        $produit->quantite = $req->quantite;
        $produit->prix = $req->prix;


        // Sauvegarder le produit dans la base de données
        $produit->save();

        // Rediriger vers la liste des produits avec un message de succès
        return redirect('/list-produit')->with('success', 'Produit ajouté avec succès');
    }

    // En cas d'erreur, rediriger avec un message d'erreur
    return redirect('/ajout-produit')->with('error', 'Erreur lors de l\'ajout du produit');
}

    public function getProduitId($id)
        {
            $produit = Produit::find($id);
            return view("Modifier-produit", ['data' => $produit]);
        }
        public function UpdateProduit(Request $req)
        {
            // Validate the request data
            $req->validate([
                'nom' => 'required|string',
                'description' => 'required|string',
                'categorie' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add image validation if needed
                'quantite' => 'required|integer',
                'prix' => 'required|numeric',
            ]);
        
            // Find the existing product by its ID
            $produit = Produit::find($req->id);
        
            // Check if the product exists
            if ($produit) {
                // Update the product attributes
                $produit->nom = $req->nom;
                $produit->description = $req->description;
                $produit->categorie = $req->categorie;
                $produit->quantite = $req->quantite;
                $produit->prix = $req->prix;
        
                // Check if a new image is uploaded
                if ($req->file('image')) {
                    $file = $req->file('image');
                    $filename = date('YmdHi') . $file->getClientOriginalName();
                    $file->move(public_path('uploads'), $filename);
                    $produit->image = $filename;
                }
        
                // Save the changes to the database
                $produit->save();
        
                return redirect('/list-produit')->with('success', 'Product updated successfully');
            } else {
                // Handle the case where the product is not found
                return redirect('/list-produit')->with('error', 'Product not found');
                // Alternatively, you can redirect to an error page or take other appropriate actions
            }
        }
        
        
}
