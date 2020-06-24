<?php

use Chronopost\Classes\QuickcostWebService;
use Chronopost\Enums\ECodeProduit;
use Chronopost\Enums\EService;
use Chronopost\Enums\ETypeProduit;
use Chronopost\RequestModels\CalculateDeliveryTime;
use Chronopost\RequestModels\CalculateProducts;
use Chronopost\RequestModels\RecherchePointChronopostInterParService;
use PHPUnit\Framework\TestCase;

class QuickcostWebServiceTest extends TestCase
{

    public function testQuickcost()
    {
        //logins de test
        \Chronopost\Abstracts\ChronopostWebService::$accountNumber = "19869502";
        \Chronopost\Abstracts\ChronopostWebService::$password= "255562";

        $result = new QuickcostWebService();

        $response = $result->quickCost(new \Chronopost\RequestModels\QuickCost("84000","84000",1,\Chronopost\Enums\ECodeProduit::CHRONO_13 ));
        $this->assertSame(2, count($response->getAssurance()));
    }

    public function testCalculateProducts()
    {
        //logins de test
        \Chronopost\Abstracts\ChronopostWebService::$accountNumber = "19869502";
        \Chronopost\Abstracts\ChronopostWebService::$password= "255562";
        $result = new QuickcostWebService();
        $response = $result->calculateProducts(new CalculateProducts( ));
        $this->assertSame(11,count($response->getProductList()) );
    }

    public function testCalculateDeliveryTimeDeliverySaturdayAllowed()
    {
        //logins de test
        \Chronopost\Abstracts\ChronopostWebService::$accountNumber = "19869502";
        \Chronopost\Abstracts\ChronopostWebService::$password= "255562";
        $result = new QuickcostWebService();
        $response = $result->calculateDeliveryTime(new CalculateDeliveryTime(
            "FR",
            "30200",
            "FR",
            "30200",
            "Moloy",
            ECodeProduit::CHRONO_13,
            ETypeProduit::MATERIEL,
            EService::DELIVERY_ON_SATURDAY,
            new DateTime("2021-01-15")));
        $this->assertSame(
            (new DateTime('2021-01-16 13:00'))->format('d/m/Y H:i'),
            (new DateTime($response->getDate()))->format('d/m/Y H:i')
        );
    }


    public function testCalculateDeliveryTimeDeliverySaturdayNotAllowed()
    {
        //logins de test
        \Chronopost\Abstracts\ChronopostWebService::$accountNumber = "19869502";
        \Chronopost\Abstracts\ChronopostWebService::$password= "255562";
        $result = new QuickcostWebService();
        $response = $result->calculateDeliveryTime(new CalculateDeliveryTime(
            "FR",
            "30200",
            "FR",
            "30200",
            "Moloy",
            ECodeProduit::CHRONO_13,
            ETypeProduit::MATERIEL,
            EService::NO_DELIVERY_ON_SATURDAY,
            new DateTime("2021-01-15")));
        $this->assertSame(
            (new DateTime('2021-01-18 13:00'))->format('d/m/Y H:i'),
            (new DateTime($response->getDate()))->format('d/m/Y H:i')
        );
    }
}
