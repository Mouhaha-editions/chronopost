<?php

namespace Chronopost;


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
}