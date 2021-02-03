<?php

namespace microvalencia\MRW;

use microvalencia\MRW\Entity\AuthHeader;
use microvalencia\MRW\Entity\ServiceData;
use microvalencia\MRW\Entity\ShippingAddress;
use microvalencia\MRW\Entity\ShippingUser;
use microvalencia\MRW\Services\SoapHeaderFactory;
use microvalencia\MRW\Services\SoapRequestFactory;
use microvalencia\MRW\Services\SoapResponseFactory;
use microvalencia\MRW\Services\SoapTicketRequestFactory;
use microvalencia\MRW\Services\SoapTrackingServicesRequestFactory;
use SoapClient;

class Client
{
    const TRANSACTION_METHOD = 'TransmEnvio';
    const TICKET_METHOD = 'EtiquetaEnvio';
    const TRACKING_METHOD = 'GetEnvios';

    private $client;
    private $authHeader;

    public function __construct(SoapClient $soapClient, AuthHeader $authHeader)
    {
        $this->client = $soapClient;
        $this->authHeader = $authHeader;
    }

    public function createTransaction(ServiceData $data, ShippingAddress $address, ShippingUser $user)
    {
        $this->client->__setSoapHeaders([SoapHeaderFactory::create($this->authHeader)]);
        $request = SoapRequestFactory::create($data, $address, $user);
        $response = $this->client->__soapCall(self::TRANSACTION_METHOD, $request);

        return SoapResponseFactory::create($response);
    }

    public function getTicketFile($orderId)
    {
        $this->client->__setSoapHeaders([SoapHeaderFactory::create($this->authHeader)]);
        $request = SoapTicketRequestFactory::create($orderId);
        $response = $this->client->__soapCall(self::TICKET_METHOD, $request);

        return $response;
    }

    public function getTrackingService($albaran, $tipoInformacion = 0, $fechaDesde = '', $fechaHasta = ''){
        
        $request = SoapTrackingServicesRequestFactory::create($this->authHeader->userName, $this->authHeader->password, 3082, 0, $albaran, '', $fechaDesde, $fechaHasta, $tipoInformacion);
        $response = $this->client->__soapCall(self::TRACKING_METHOD, $request);

        return $response;

    }

}
