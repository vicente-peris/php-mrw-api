<?php

use klareNNNs\MRW\Entity\ServiceData;
use klareNNNs\MRW\Entity\ShippingAddress;
use klareNNNs\MRW\Entity\ShippingUser;
use PHPUnit\Framework\TestCase;
use klareNNNs\MRW\ApiClient;
use klareNNNs\MRW\Entity\AuthHeader;

class IntegrationApiClientTest extends TestCase
{
    const TEST_SOAP_CLIENT = 'http://sagec-test.mrw.es/MRWEnvio.asmx?WSDL';

    public function testCanConstructApiClient()
    {
        $soap = new SoapClient(self::TEST_SOAP_CLIENT, array('trace' => 1, "exceptions" => 0));
        $franchise = '';
        $subscriber = '';
        $department = '';
        $user = '';
        $password = '';
        $auth = new AuthHeader($franchise, $subscriber, $department, $user, $password);

        $apiClient = new ApiClient($soap, $auth);

        $this->assertInstanceOf('\klareNNNs\MRW\ApiClient', $apiClient);
    }

    public function testCanQueryAgainstMRW()
    {
        $soap = new SoapClient(self::TEST_SOAP_CLIENT, array('trace' => 1, "exceptions" => 0));
        $franchise = getenv('FRANCHISE');
        $subscriber = getenv('SUBSCRIBER');
        $department = getenv('DEPARTMENT');
        $user = getenv('USER');
        $password = getenv('PASSWORD');
        $auth = new AuthHeader($franchise, $subscriber, $department, $user, $password);

        $apiClient = new ApiClient($soap, $auth);


        $date = date("dd/mm/YY");
        $reference = 'BWZXTFSZU';
        $onFranchise = 'N';
        $serviceCode = '0200';
        $serviceDescription = '';
        $items = '';
        $numberOfItems = '1';
        $weight = '1';
        $saturdayDelivery = 'N';
        $return = 'N';
        $refund = 'O';
        $refundAmount = '25,9';

        $serviceData = new ServiceData($date, $reference, $onFranchise, $serviceCode, $serviceDescription, $items,
            $numberOfItems, $weight, $saturdayDelivery, $return, $refund, $refundAmount);

        $addressCode = '';
        $viaType = '';
        $via = 'Calle Ramon y Cajal';
        $number = '22';
        $other = '';
        $postalCode = '08402';
        $city = 'Granollers';
        $countryCode = 'ESP';

        $shippingAddress = new ShippingAddress($addressCode, $viaType, $via, $number, $other, $postalCode, $city,
            $countryCode);

        $nif = '';
        $name = 'Jorge';
        $telephone = '666666666';
        $contact = 'Jorge';
        $atentionTo = 'Jorge';
        $observations = '';

        $shippingUser = new ShippingUser($nif, $name, $telephone, $contact, $atentionTo, $observations);

        $delivery = $apiClient->createTransaction($serviceData, $shippingAddress, $shippingUser);

        $this->assertInstanceOf('\klareNNNs\MRW\ApiClient', $apiClient);
        $this->assertInstanceOf('\klareNNNs\MRW\Entity\Delivery', $delivery);
    }

}
