<?php
namespace Chronopost\Interfaces;

interface IAccountInformations
{
    public function setAccountNumber(string $accountNumber);
    public function setPassword(string $password);
}