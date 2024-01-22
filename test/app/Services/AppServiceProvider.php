<?php
use Illuminate\Support\ServiceProvider;
use App\Services\SoapService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(SoapService::class, function ($app) {
            $wsdlUrl = 'https://url-du-service-soap?wsdl'; // Remplacez par votre URL du service SOAP
            return new SoapService($wsdlUrl);
        });
    }
}
?>