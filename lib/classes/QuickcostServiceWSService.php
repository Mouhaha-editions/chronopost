<?php


namespace Chronopost\Classes;


use SoapParam;

class QuickcostServiceWSService extends \SoapClient
{
    public function __construct($wsdl = "https://www.chronopost.fr/quickcost-cxf/QuickcostServiceWS?wsdl", $options = array())
    {
        parent::__construct($wsdl, $options);
    }

    public function quickCost(quickCost $parameters) {
        return $this->__soapCall("quickCost",array($parameters)

        );
    }

    public function calculateProducts(calculateProducts $parameters) {
        return $this->__soapCall("calculateProducts", array($parameters));
    }

}