<?php

namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Models\admin;
   
class AdminController extends Controller
{
    public function getAdmin()
    {
        $admin = Admin::All();
        return view("list-admin", ['data' => $admin]);
    }

    public function getAdminId($id)
    {
        $admin = Admin::find($id);
        return view("Modifier-admin", ['data' => $admin]);
    }

    public function SuppAdmin($id)
{
    // Trouver l'administrateur à supprimer
    $admin = Admin::find($id);
    
    if ($admin) {
        // Supprimer l'administrateur de la base de données
        $admin->delete();
    }

    // Rediriger vers la liste des administrateurs
    return redirect('/list-admin');
}



public function addAdmin(Request $req)
{
    // Valider les données du formulaire
    $req->validate([
        'nom' => 'required|string',
        'login' => 'required|string',
        'email' => 'required|email',
        'password' => 'required|string|min:6', // Vous pouvez ajuster la longueur minimale selon vos besoins
    ]);

    
    $existingClient = Admin::where('email', $req->email)->where('id', '!=', $req->id)->first();

        if ($existingClient) {
            // Retourner une redirection avec un message d'erreur
            return redirect()->back()->withErrors(['email' => 'L\'adresse e-mail est déjà utilisée par un autre admin.'])->withInput();
        }

    // Créer une nouvelle instance d'Admin
    $admin = new Admin;
    $admin->nom = $req->nom;
    $admin->email = $req->email;
    $admin->login = $req->login;
    $admin->password = $req->password;

    // Sauvegarder l'admin dans la base de données
    $admin->save();

    // Rediriger vers la liste des admins avec un message de succès
    return redirect('/list-admin')->with('success', 'Administrateur ajouté avec succès');
}


public function UpdateAdmin(Request $req)
{
    // Valider les données du formulaire
    $req->validate([
        'nom' => 'required|string',
        'email' => 'required|email',
        'login' => 'required|string',
        'password' => 'required|string', // Vous pouvez ajuster cela en fonction de vos besoins
    ]);

    // Trouver l'administrateur à mettre à jour
    $admin = Admin::find($req->id);

    // Mettre à jour les propriétés de l'administrateur
    $admin->nom = $req->nom;
    $admin->email = $req->email;
    $admin->login = $req->login;
    $admin->password = $req->password;

    // Sauvegarder les modifications
    $admin->save();

    // Rediriger vers la liste des administrateurs avec un message de succès
    return redirect('/list-admin')->with('success', 'Administrateur mis à jour avec succès');
}


    }
    
