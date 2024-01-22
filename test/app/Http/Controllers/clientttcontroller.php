<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Services\SoapService;

class ClientController extends Controller
{
    private $soapService;

    public function __construct(SoapService $soapService)
    {
        $this->soapService = $soapService;
    }

    public function getClient()
    {
        $client = Client::all();

        // Appeler une méthode du service SOAP
        $result = $this->soapService->callSoapMethod('getClients', []);

        return view("list-client", ['dataa' => $client, 'soapResult' => $result]);
    }

    public function getClientId($id)
    {
        $client = Client::find($id);

        // Appeler une autre méthode du service SOAP avec des paramètres
        $result = $this->soapService->callSoapMethod('getClientDetails', ['clientId' => $id]);

        return view("Modifier-client", ['data' => $client, 'soapResult' => $result]);
    }

    public function SuppClient($id)
    {
        $client = Client::find($id);

        if ($client) {
            // Appeler une autre méthode du service SOAP pour supprimer le client à distance
            $this->soapService->callSoapMethod('deleteClient', ['clientId' => $id]);

            $client->delete();
        }

        return redirect('/list-client');
    }

    public function AddClient(Request $req)
    {
        $req->validate([
            'nom' => 'required|string',
            'email' => 'required|email|unique:clients,login',
            'login' => 'required|string|unique:clients',
            'password' => 'required|string',
        ]);

        $existingClient = Client::where('email', $req->email)->where('id', '!=', $req->id)->first();

        if ($existingClient) {
            return redirect()->back()->withErrors(['email' => 'L\'adresse e-mail est déjà utilisée par un autre client.'])->withInput();
        }

        $client = new Client;
        $client->nom = $req->nom;
        $client->email = $req->email;
        $client->login = $req->login;
        $client->password = $req->password;

        // Appeler une méthode du service SOAP pour ajouter le client à distance
        $this->soapService->callSoapMethod('addClient', ['clientData' => $req->all()]);

        $client->save();

        return redirect('/list-client')->with('success', 'Client ajouté avec succès');
    }

    public function UpdateClient(Request $req)
    {
        $req->validate([
            'nom' => 'required|string',
            'email' => 'required|email|unique:clients,email,' . $req->id,
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $client = Client::find($req->id);

        $client->nom = $req->nom;
        $client->email = $req->email;
        $client->login = $req->login;
        $client->password = $req->password;

        // Appeler une méthode du service SOAP pour mettre à jour le client à distance
        $this->soapService->callSoapMethod('updateClient', ['clientId' => $req->id, 'clientData' => $req->all()]);

        $client->save();

        return redirect('/list-client')->with('success', 'Client mis à jour avec succès');
    }
}
