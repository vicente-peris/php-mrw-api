<?php

namespace microvalencia\MRW\Services;

use microvalencia\MRW\Entity\Delivery;
use microvalencia\MRW\Entity\AuthHeader;

class TicketService
{
    public function getTicketUrl(Delivery $delivery, AuthHeader $authHeader): string
    {
        return $delivery->getUrl()
            . '?Franq=' . $authHeader->franchiseCode
            . '&Ab=' . $authHeader->subscriberCode
            . '&Dep=' . $authHeader->departmentCode
            . '&Usr=' . $authHeader->userName
            . '&Pwd=' . $authHeader->password
            . '&NumEnv=' . $delivery->getShippingNumber();
    }
}
