<?php

namespace Chronopost\Tests;

require_once __DIR__ . '/../lib/classes/Header.php';
require_once __DIR__ . '/../lib/classes/CalculateProducts.php';
require_once __DIR__ . '/../lib/classes/QuickcostServiceWSService.php';
require_once __DIR__ . '/../lib/classes/quickCost.php';
require_once __DIR__ . '/../lib/Chronopost.php';

use Chronopost\Chronopost;
use Chronopost\Classes\CalculateProducts;
use Chronopost\Classes\Header;
use Chronopost\Classes\quickCost;
use Chronopost\Classes\QuickcostServiceWSService;
use PHPUnit\Framework\TestCase;

class ChronopostPriceTest extends TestCase
{

    public function testPushAndPop()
    {
        $chronopost = new Chronopost();


//        $sender = array_merge($account->__serialize(), [
//            "depCountryCode" => "FR",
//            "depZipCode" => "30200",
//            "arrCountryCode" => "FR",
//            "arrZipCode" => "21120",
//            "arrCity" => "Moloy",
//            "type" => "M",
//            "weight" => 12,
//            "height" => "",
//            "length" => "",
//            "width" => "",
//            "shippingDate" => date('d/m/Y')
//        ]);

        $result = new QuickcostServiceWSService();
        $quickCost = new quickCost();
        $quickCost->accountNumber = "TODO";
        $quickCost->password = "TODO";
        $quickCost->depCode = "84000";
        $quickCost->arrCode = "21120";
        $quickCost->weight = 1;
        $quickCost->productCode = "02";
        $quickCost->type = "M";

//        var_dump($result->quickCost($quickCost));
        var_dump($result->calculateProducts(new CalculateProducts( "TODO","TODO")));
        $this->assertSame($result, []);
    }
}
