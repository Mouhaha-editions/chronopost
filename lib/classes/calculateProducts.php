<?php


namespace Chronopost\Classes;


class calculateProducts extends Header
{
    public $depCountryCode = "FR";
    public $depZipCode = "30200";
    public $arrCountryCode = "FR";
    public $arrZipCode = "30200";
    public $arrCity = "Moloy";
    public $type = "M";
    public $weight = "1";
    public $height = "1";
    public $length = "1";
    public $width = "1";
    public $shippingDate;

    public function __construct($accountNumber, $password)
    {
        var_dump( date('d/m/Y'));
        $this->shippingDate = date('d/m/Y');
        parent::__construct($accountNumber, $password);
    }

}