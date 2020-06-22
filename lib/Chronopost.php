<?php


namespace Chronopost;


use Chronopost\Classes\QuickcostServiceWSService;
use Chronopost\Classes\Shipping;
use Chronopost\Classes\ShippingResponse;
use SoapClient;
use SoapFault;

class Chronopost
{
    const WSDL_SHIPPING_SERVICE = "https://ws.chronopost.fr/";

    public function __construct()
    {
        // Check is SOAP is available
        if (!extension_loaded('soap')) {
            die('The SOAP extension is not available or configured on the server ; The module will not work without this extension ! Please contact your host to activate it in your PHP installation.');
        }
    }


//    /**
//     * Génère une étiquette
//     *
//     * @param Shipping $parameters
//     * @return ShippingResponse
//     * @throws SoapFault
//     */
//    public function genereEtiquette(Shipping $params)
//    {
//        $client_ch = new soapClient(self::WSDL_SHIPPING_SERVICE."shipping-cxf/ShippingServiceWS?wsdl");
//        $client_ch->soap_defencoding = 'UTF-8';
//        $client_ch->decode_utf8 = false;
//
//        return $client_ch->shipping($params);
//    }
    public function getAvailableProducts($options)
    {
        try {
            $client_ch = new QuickcostServiceWSService(self::WSDL_SHIPPING_SERVICE."quickcost-cxf/QuickcostServiceWS?wsdl",['trace'=>1]);

            $result = $client_ch->calculateProducts([new \SoapParam($options,"parameters")]);
            echo "====== REQUEST HEADERS =====" . PHP_EOL;
            var_dump($client_ch->__getLastRequestHeaders());
            echo "========= REQUEST ==========" . PHP_EOL;
            var_dump($client_ch->__getLastRequest());
            echo "========= RESPONSE =========" . PHP_EOL;
            var_dump($result);
            return $result;
        }catch(\Exception $e){
            var_dump($e);
        }
return null;
    }

    public function quickCost()
    {
        
    }
}