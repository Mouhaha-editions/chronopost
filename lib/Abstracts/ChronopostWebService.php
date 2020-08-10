<?php

namespace Chronopost\Abstracts;

use Chronopost\Interfaces\IAccountInformations;
use SoapClient;

abstract class ChronopostWebService extends SoapClient
{
    public static $accountNumber;
    public static $password;

    public function loginModel(IAccountInformations $accountInformations)
    {
        $accountInformations
            ->setAccountNumber(self::$accountNumber)
            ->setPassword(self::$password);

    }
}