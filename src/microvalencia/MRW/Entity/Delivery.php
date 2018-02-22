<?php

namespace microvalencia\MRW\Entity;

class Delivery
{
    private $state;
    private $message;
    private $requestNumber;
    private $shippingNumber;
    private $url;

    public function __construct($state, $message, $requestNumber, $shippingNumber, $url)
    {
        $this->state = $state;
        $this->message = $message;
        $this->requestNumber = $requestNumber;
        $this->shippingNumber = $shippingNumber;
        $this->url = $url;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getRequestNumber()
    {
        return $this->requestNumber;
    }

    public function getShippingNumber()
    {
        return $this->shippingNumber;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
