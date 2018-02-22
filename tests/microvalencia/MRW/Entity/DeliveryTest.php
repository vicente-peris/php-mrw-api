<?php

use PHPUnit\Framework\TestCase;
use microvalencia\MRW\Entity\Delivery;

class DeliveryTest extends TestCase
{
    public function testCanConstructDelivery()
    {
        $state = '1';
        $message = 'Message';
        $requestNumber = '000666777';
        $shippingNumber = '77766600';
        $url = 'http://fakeurl.com';

        $delivery = new Delivery($state , $message, $requestNumber, $shippingNumber, $url);

        $this->assertInstanceOf('microvalencia\MRW\Entity\Delivery', $delivery);
        $this->assertEquals($state, $delivery->getState());
        $this->assertEquals($message, $delivery->getMessage());
        $this->assertEquals($requestNumber, $delivery->getRequestNumber());
        $this->assertEquals($shippingNumber, $delivery->getShippingNumber());
        $this->assertEquals($url, $delivery->getUrl());
    }
}
