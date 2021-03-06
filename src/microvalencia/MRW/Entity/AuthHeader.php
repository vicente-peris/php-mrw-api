<?php

namespace microvalencia\MRW\Entity;

class AuthHeader
{
    var $franchiseCode;
    var $subscriberCode;
    var $departmentCode;
    var $userName;
    var $password;

    public function __construct($franchise, $subscriber, $department, $user, $pass)
    {
        $this->franchiseCode = $franchise;
        $this->subscriberCode = $subscriber;
        $this->departmentCode = $department;
        $this->userName = $user;
        $this->password = $pass;
    }

}
