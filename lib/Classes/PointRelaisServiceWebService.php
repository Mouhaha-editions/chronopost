<?php

namespace Chronopost\Classes;

use Chronopost\Abstracts\ChronopostWebService;
use Chronopost\RequestModels\RecherchePointChronopostInterParService;


class PointRelaisServiceWebService extends ChronopostWebService
{
    public function __construct($wsdl = "https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl", $options = array())
    {
        parent::__construct($wsdl, $options);
    }


    /**
     * @param RecherchePointChronopostInterParService $parameters
     * @return \Chronopost\ResponseModels\RecherchePointChronopostInterParService
     */
    public function recherchePointChronopostInterParService(RecherchePointChronopostInterParService $parameters)
    {
        parent::loginModel($parameters);
        $response = $this->__soapCall("recherchePointChronopostInterParService", array($parameters));
        return new \Chronopost\ResponseModels\RecherchePointChronopostInterParService($response->return);
    }

}