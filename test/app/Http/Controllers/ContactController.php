<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function getContact()
    {
        $contact = Contact::All();
        return view("list-contact", ['data' => $contact]);
    }
    public function SuppContact($id)
{
    // Trouver l'Contact à supprimer
    $contact = Contact::find($id);
    
    if ($contact) {
        // Supprimer l'Contact de la base de données
        $contact->delete();
    }
    
    // Rediriger vers la liste des Contact
    return redirect('/list-contact');}
    public function AddContact(Request $req)
    {

        $contact = new Contact;
        $contact->nom = $req->nom;
        $contact->email = $req->email;
        $contact->message = $req->message;
        $contact->sujet = $req->sujet;

        $contact->save();
        return redirect('/list-contact');
    }

    /* public function updateNotif($id){
        $contact = Contact::find($id);
        $contact->notif = 1;
        $contact->save();
        return redirect('/list-contact');

    } */
}

    

