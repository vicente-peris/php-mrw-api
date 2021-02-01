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

    private $deliveryAfter = '';
    private $timeSlot = '0';

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

    public function setDate($value){
        $this->date = $value;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($value){
        $this->reference = $value;
    }

    public function getOnFranchise()
    {
        return $this->onFranchise;
    }

    public function setOnFranchise($value){
        $this->onFranchise = $value;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    public function setServiceCode($value){
        $this->serviceCode = $value;
    }

    public function getServiceDescription()
    {
        return $this->serviceDescription;
    }

    public function setServiceDescription($value){
        $this->serviceDescription = $value;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($value){
        $this->items = $value;
    }

    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }

    public function setNumberOfItems($value){
        $this->numberOfItems = $value;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($value){
        $this->weight = $value;
    }

    public function getSaturdayDelivery()
    {
        return $this->saturdayDelivery;
    }

    public function setSaturdayDelivery($value){
        $this->saturdayDelivery = $value;
    }

    public function getReturn()
    {
        return $this->return;
    }

    public function setReturn($value){
        $this->return = $value;
    }

    public function getRefund()
    {
        return $this->refund;
    }

    public function setRefund($value){
        $this->refund = $value;
    }

    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    public function setRefundAmount($value){
        $this->refundAmount = $value;
    }

    public function getNotificationsMail()
    {
        return $this->notificationsMail;
    }

    public function setNotificationsMail($value){
        $this->notificationsMail = $value;
    }

    public function getNotificationsSMS()
    {
        return $this->notificationsSMS;
    }

    public function setNotificationsSMS($value){
        $this->notificationsSMS = $value;
    }

    public function getDeliveryAfter()
    {
        return $this->deliveryAfter;
    }

    public function setDeliveryAfter($value){
        $this->deliveryAfter = $value;
    }

    public function getTimeSlot()
    {
        return $this->timeSlot;
    }

    public function setTimeSlot($value){
        $this->timeSlot = $value;
    }

}
