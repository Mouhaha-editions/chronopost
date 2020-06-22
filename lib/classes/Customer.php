<?php

namespace Chronopost\Classes;


use Chronopost\Abstracts\Address;

class Customer extends Address
{
    /**
     * @var string
     */
    private $printAsSender;

    /**
     * @return string
     */
    public function getPrintAsSender()
    {
        return $this->printAsSender;
    }

    /**
     * @param string $printAsSender
     * @return Customer
     */
    public function setPrintAsSender($printAsSender)
    {
        $this->printAsSender = $printAsSender;
        return $this;
    }

}