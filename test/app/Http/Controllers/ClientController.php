<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Services\SoapService;


class ClientController extends Controller
{
    
    public function getClient()
    {
        $client = Client::All();
        return view("list-client", ['dataa' => $client]);

        
    }

    public function getClientId($id)
    {
        $client = Client::find($id);
        return view("Modifier-client", ['data' => $client]);
    }

    public function SuppClient($id)
{
    // Trouver l'Client à supprimer
    $client = Client::find($id);
    
    if ($client) {
        // Supprimer  le Client de la base de données
        $client->delete();
    }

    // Rediriger vers la liste des Client
    return redirect('/list-client');
}
public function AddClient(Request $req)
{
    // Valider les données du formulaire
    $req->validate([
        'nom' => 'required|string',
        'email' => 'required|email|unique:clients,login',
        'login' => 'required|string|unique:clients', // Assurez-vous que le login est unique dans la table clients
        'password' => 'required|string', // Vous pouvez ajuster cela en fonction de vos besoins
    ]);

    $existingClient = Client::where('email', $req->email)->where('id', '!=', $req->id)->first();

        if ($existingClient) {
            // Retourner une redirection avec un message d'erreur
            return redirect()->back()->withErrors(['email' => 'L\'adresse e-mail est déjà utilisée par un autre client.'])->withInput();
        }

    // Créer une nouvelle instance de Client
    $client = new Client;

    // Assigner les valeurs aux attributs du client
    $client->nom = $req->nom;
    $client->email = $req->email;
    $client->login = $req->login;
    $client->password = $req->password;

    // Sauvegarder le client dans la base de données
    $client->save();

    // Rediriger vers la liste des clients avec un message de succès
    return redirect('/list-client')->with('success', 'Client ajouté avec succès');
}


  

    public function UpdateClient(Request $req)
    {
        // Valider les données du formulaire
        $req->validate([
            'nom' => 'required|string',
            'email' => 'required|email|unique:clients,email,' . $req->id, // Ajout de la règle unique avec exception pour cet enregistrement            'login' => 'required|string',
            'login' => 'required|string',
            'password' => 'required|string', // Vous pouvez ajuster cela en fonction de vos besoins
        ]);
    
        
    
        // Trouver le client à mettre à jour
        $client = Client::find($req->id);
        
    
        // Mettre à jour les propriétés du client
        $client->nom = $req->nom;
        $client->email = $req->email;
        $client->login = $req->login;
        $client->password = $req->password;
    
        // Sauvegarder les modifications
        $client->save();
    
        // Rediriger vers la liste des clients avec un message de succès
        return redirect('/list-client')->with('success', 'Client mis à jour avec succès');
    }
    }

