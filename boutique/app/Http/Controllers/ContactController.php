<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function AddContact(Request $req)
    {
        // Valider les données du formulaire
        $req->validate([
            'nom' => 'required|string',
            'email' => 'required|email',
            'sujet' => 'required|string',
            'message' => 'required|string',
        ]);
    
        // Si la validation réussit, créer et sauvegarder le contact
        $contact = new Contact;
        $contact->nom = $req->nom;
        $contact->email = $req->email;
        $contact->sujet = $req->sujet;
        $contact->message = $req->message;
    
        $contact->save();
    
        return redirect('/contact');
    }
    
}
