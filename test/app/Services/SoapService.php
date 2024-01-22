<?php

namespace App\Services;

class SoapService
{
    private $client;

    public function __construct($wsdlUrl)
    {
        try {
            // Initialiser le client SOAP
            $this->client = new \SoapClient($wsdlUrl, [
                'cache_wsdl' => WSDL_CACHE_NONE, // Désactiver le cache WSDL
                'trace' => true,
                'exceptions' => true,
            ]);
        } catch (\Exception $e) {
            // Gérer les erreurs d'initialisation du client SOAP
            throw new \Exception('Erreur lors de l\'initialisation du client SOAP: ' . $e->getMessage());
        }
    }

    public function callSoapMethod($methodName, $params)
    {
        try {
            // Appel de la méthode du service SOAP
            return $this->client->__soapCall($methodName, [$params]);
        } catch (\Exception $e) {
            // Gérer les erreurs lors de l'appel à la méthode SOAP
            throw new \Exception('Erreur lors de l\'appel de la méthode SOAP: ' . $e->getMessage());
        }
    }
}
