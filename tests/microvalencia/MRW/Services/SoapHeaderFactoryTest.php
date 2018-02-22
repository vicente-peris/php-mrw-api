<?php

use microvalencia\MRW\Entity\AuthHeader;
use PHPUnit\Framework\TestCase;
use microvalencia\MRW\Services\SoapHeaderFactory;

class SoapHeaderFactoryTest extends TestCase
{
    public function testSoapHeaderFactoryReturnsSoapHeader()
    {
        $franchise = 'franchise';
        $subscriber = 'subscriber';
        $department = 'departmen';
        $user = 'user';
        $password = 'owd';
        $auth = new AuthHeader($franchise, $subscriber, $department, $user, $password);

        $result = SoapHeaderFactory::create($auth);

        $this->assertInstanceOf('SoapHeader', $result);
    }
}
