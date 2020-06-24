<?php

namespace Chronopost\Abstracts;


use Chronopost\Interfaces\IAccountInformations;
use Chronopost\RequestModels\AccountInformations;
use SoapClient;

abstract class ChronopostWebService extends SoapClient
{
    public static string $accountNumber;
    public static string $password ;

    public function loginModel(IAccountInformations $accountInformations)
    {
        $accountInformations
            ->setAccountNumber(self::$accountNumber)
            ->setPassword(self::$password);

    }
}