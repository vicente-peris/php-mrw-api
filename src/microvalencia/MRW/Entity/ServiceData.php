<?php

namespace microvalencia\MRW\Entity;

class ServiceData
{
    private $date;
    private $reference;
    private $onFranchise;
    private $serviceCode;
    private $serviceDescription;
    private $items;
    private $numberOfItems;
    private $weight;
    private $saturdayDelivery;
    private $return;
    private $refund;
    private $refundAmount;
    private $notificationsMail;
    private $notificationsSMS;

    public function __construct(
        $date,
        $reference,
        $onFranchise,
        $serviceCode,
        $serviceDescription,
        $items,
        $numberOfItems,
        $weight,
        $saturdayDelivery,
        $return,
        $refund,
        $refundAmount,
        $notificationsMail,
        $notificationsSMS
    ) {
        $this->date = $date;
        $this->reference = $reference;
        $this->onFranchise = $onFranchise;
        $this->serviceCode = $serviceCode;
        $this->serviceDescription = $serviceDescription;
        $this->items = $items;
        $this->numberOfItems = $numberOfItems;
        $this->weight = $weight;
        $this->saturdayDelivery = $saturdayDelivery;
        $this->return = $return;
        $this->refund = $refund;
        $this->refundAmount = $refundAmount;
        $this->notificationsMail = $notificationsMail;
        $this->notificationsSMS = $notificationsSMS;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function getOnFranchise()
    {
        return $this->onFranchise;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    public function getServiceDescription()
    {
        return $this->serviceDescription;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getSaturdayDelivery()
    {
        return $this->saturdayDelivery;
    }

    public function getReturn()
    {
        return $this->return;
    }

    public function getRefund()
    {
        return $this->refund;
    }

    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    public function getNotificationsMail()
    {
        return $this->notificationsMail;
    }

    public function getNotificationsSMS()
    {
        return $this->notificationsSMS;
    }

}
