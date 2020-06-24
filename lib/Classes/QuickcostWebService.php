<?php

namespace Chronopost\Classes;


use Chronopost\Abstracts\ChronopostWebService;
use Chronopost\RequestModels\CalculateDeliveryTime;
use Chronopost\RequestModels\CalculateProducts;
use Chronopost\RequestModels\QuickCost;
use Mapper\ModelMapper;
use SebastianBergmann\CodeUnit\Mapper;

class QuickcostWebService extends ChronopostWebService
{
    public function __construct($wsdl = "https://www.chronopost.fr/quickcost-cxf/QuickcostServiceWS?wsdl", $options = array())
    {
        parent::__construct($wsdl, $options);
    }

    /**
     * @param QuickCost $parameters
     * @return \Chronopost\ResponseModels\QuickCost
     */
    public function quickCost(QuickCost $parameters)
    {
        parent::loginModel($parameters);
        return new \Chronopost\ResponseModels\QuickCost(
            $this->__soapCall(
                "quickCost",
                array($parameters))->return
        );
    }

    /**
     * @param CalculateProducts $parameters
     * @return \Chronopost\ResponseModels\CalculateProducts
     */
    public function calculateProducts(CalculateProducts $parameters)
    {
        parent::loginModel($parameters);
        return new \Chronopost\ResponseModels\CalculateProducts($this->__soapCall("calculateProducts", array($parameters))->return);
    }

    /**
     * @param CalculateDeliveryTime $parameters
     * @return \Chronopost\ResponseModels\CalculateDeliveryTime
     */
    public function calculateDeliveryTime(CalculateDeliveryTime $parameters)
    {
        $response = $this->__soapCall("calculateDeliveryTime", array($parameters));
        return new \Chronopost\ResponseModels\CalculateDeliveryTime($response->return);
    }



}