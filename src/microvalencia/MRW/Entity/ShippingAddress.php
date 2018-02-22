<?php

namespace microvalencia\MRW\Entity;

class ShippingAddress
{
    private $addressCode;
    private $viaType;
    private $via;
    private $number;
    private $other;
    private $postalCode;
    private $city;
    private $countryCode;

    public function __construct(
        $addressCode,
        $viaType,
        $via,
        $number,
        $other,
        $postalCode,
        $city,
        $countryCode
    ) {
        $this->addressCode = $addressCode;
        $this->viaType = $viaType;
        $this->via = $via;
        $this->number = $number;
        $this->other = $other;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->countryCode = $countryCode;
    }

    public function getAddressCode()
    {
        return $this->addressCode;
    }

    public function getViaType()
    {
        return $this->viaType;
    }

    public function getVia()
    {
        return $this->via;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getOther()
    {
        return $this->other;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }
}
