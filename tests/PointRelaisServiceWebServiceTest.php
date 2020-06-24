<?php

use Chronopost\Classes\PointRelaisServiceWebService;
use Chronopost\Classes\QuickcostWebService;
use Chronopost\Enums\ECodeProduit;
use Chronopost\Enums\EService;
use Chronopost\Enums\ETypeProduit;
use Chronopost\RequestModels\CalculateDeliveryTime;
use Chronopost\RequestModels\CalculateProducts;
use Chronopost\RequestModels\RecherchePointChronopostInterParService;
use PHPUnit\Framework\TestCase;

class PointRelaisServiceWebServiceTest extends TestCase
{
    public function testRecherchePointChronopostInterParService()
    {
        //logins de test
        \Chronopost\Abstracts\ChronopostWebService::$accountNumber = "19869502";
        \Chronopost\Abstracts\ChronopostWebService::$password= "255562";
        $result = new PointRelaisServiceWebService();
        $response = $result->recherchePointChronopostInterParService(new RecherchePointChronopostInterParService());
        $this->assertSame(
            25,
            count($response->getListePointRelais())
        );
    }
}
