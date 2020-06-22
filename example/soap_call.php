<?php
/**
 * Exemple d'utilisation du Webservice Chronopost pour générer une étiquette pdf
 * Docs :
 *  - https://www.gcg-architectes.com/files/projet/c/h/chr_wsv2_5_10/chr_wsv2_5_1058515f3e7c38b.pdf
 *
 * @author Benoit VRIGNAUD <benoit.vrignaud@zaclys.net>
 */

use Chronopost\Chronopost;
use Chronopost\Classes\Customer;
use Chronopost\Classes\Header;
use Chronopost\Classes\Recipient;
use Chronopost\Classes\Reference;
use Chronopost\Classes\Shipper;
use Chronopost\Classes\Shipping;

require_once 'Chronopost.php';

$shipping = new Shipping();

$header = new Header();
$header
    ->setAccountNumber("TODO")
//    ->setSubAccount("TODO")
//    ->setIdEmit("TODO")
//    ->setIdentWebPro("TODO")
    ->setPassword("TODO");

$shipping->setHeader($header);


// adresse expéditeur
$shipper = new Shipper();
$shipper
    ->setAdress1('1 rue du Général')
    ->setAdress2("")
    ->setZipCode("50000")
    ->setCity("Pom Pom Galli")
    ->setCountry("FR")
    ->setCountryName("FRANCE")
    ->setCivility("M")
    ->setContactName("George Abitbol")
    ->setName('George')
    ->setName2('Abitbol')
    ->setEmail("George.Abitbol@classe.com")
    ->setPhone("041122344")
    ->setMobilePhone("0611223344");
$shipping->setShipper($shipper);

// adresse client
$customer = new Customer();
$customer
    ->setAdress1('40 RUE JEAN JAURES')
    ->setAdress2("")
    ->setZipCode("72000")
    ->setCity("MONTFRIN")
    ->setCountry("FR")
    ->setCountryName("FRANCE")
    ->setCivility("M")
    ->setContactName("Jean MARTIN")
    ->setName('The Journal')
    ->setName2('')
    ->setEmail("steven@mail.fr")
    ->setPhone("0133333333")
    ->setMobilePhone("0611223344")
    ->setPrintAsSender("N");
$shipping->setCustomer($customer);

// adresse destinataire
$recipient = new Recipient();
$recipient
    ->setAdress1('40 RUE JEAN JAURES')
    ->setAdress2("")
    ->setZipCode("69190")
    ->setCity("MONTFRIN")
    ->setCountry("FR")
    ->setCountryName("FRANCE")
    ->setCivility("M")
    ->setContactName("CLIENT")
    ->setName('CLIENTname')
    ->setName2('')
    ->setEmail("test@gmail.com")
    ->setPhone("0455667788")
    ->setMobilePhone("0611223344");
$shipping->setRecipient($recipient);


// Références expéditeur et destinataire, code barre client
//$reference = new Reference();
//$reference
//    ->setRecipientReference($commandeNo)
//    ->setShipperReference($articleNo)
//    ->setSkybillReference('123456789');


// Caractéristique de colis : poids, produit, ...

$shipping->skybillValue->productCode = '86';            // Code Produit Chronopost
$shipping->skybillValue->shipDate = date('c');          // Date d'expédition
$shipping->skybillValue->shipHour = date('G');
$shipping->skybillValue->weight = 2;
$shipping->skybillValue->service = '0';                 // Jour de livraison
$shipping->skybillValue->objectType = 'MAR';            // Type de colis (DOC/MAR)
//$shipping->skybillValue->bulkNumber = 1;              // Nombre total de colis
//$shipping->skybillValue->codCurrency = 'EUR';           // Devise  du  Retour  Express de paiement EUR (Euro) par defaut
//$shipping->skybillValue->codValue = 0;                // Valeur  Retour  Express  de paiement
//$shipping->skybillValue->customsCurrency = 'EUR';       // Devise   de   la   valeur déclarée en douane
//$shipping->skybillValue->customsValue = 0;              // Valeur déclarée en douane
//$shipping->skybillValue->insuredCurrency = 'EUR';       // Devise   de   la   valeur assurée
//$shipping->skybillValue->insuredValue = 0;
//$shipping->skybillValue->masterSkybillNumber = '?';
//$shipping->skybillValue->portCurrency = 'EUR';
//$shipping->skybillValue->portValue = 0;
//$shipping->skybillValue->skybillRank = 1;
//$shipping->skybillValue->height = $height;            // ex : '10'
///$shipping->skybillValue->length = $length;           // ex : '20'
//$shipping->skybillValue->width = $width;              // ex : '30'

$shipping->password = 'TODO';               // Mot de passe correspondant au numéro de compte


$client = new Chronopost();

try {
    $result = $client->genereEtiquette($shipping);
} catch (SoapFault $soapFault) {
    //var_dump($soapFault);
    exit($soapFault->faultstring);
}

if ($result->return->errorCode) {
    echo 'Erreur n° ' . $result->return->errorCode . ' : ' . $result->return->errorMessage;
    //var_dump($result);
} else {
    // écriture dans un fichier pdf
    $fp = fopen('data.pdf', 'w');
    fwrite($fp, $result->return->skybill);
    fclose($fp);
    echo 'OK';
}