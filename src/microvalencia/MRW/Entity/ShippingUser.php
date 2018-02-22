<?php

namespace microvalencia\MRW\Entity;

class ShippingUser
{
    private $nif;
    private $name;
    private $telephone;
    private $contact;
    private $atentionTo;
    private $observations;

    public function __construct(
        $nif,
        $name,
        $telephone,
        $contact,
        $atentionTo,
        $observations
    ) {
        $this->nif = $nif;
        $this->name = $name;
        $this->telephone = $telephone;
        $this->contact = $contact;
        $this->atentionTo = $atentionTo;
        $this->observations = $observations;
    }

    public function getNif()
    {
        return $this->nif;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function getAtentionTo()
    {
        return $this->atentionTo;
    }

    public function getObservations()
    {
        return $this->observations;
    }
}
