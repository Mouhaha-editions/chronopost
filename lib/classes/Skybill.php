<?php

namespace Chronopost\Classes;

/**
 * Caractéristique de colis : poids, produit, ...
 */
class Skybill
{
    /**
     * Nombre total de colis
     * @var integer
     */
    private $bulkNumber = 1;
    /**
     * Devise  du  Retour  Express de paiement EUR (Euro) par defaut
     * @var string
     */
    private $currency = 'EUR';
    /**
     * Valeur  Retour  Express  de paiement
     * @var float
     */
    private $value;
    /**
     * Détail contenu du colis 1
     * @var string
     */
    private $content1;
    /**
     * Détail contenu du colis 2
     * @var string
     */
    private $content2;
    /**
     * Détail contenu du colis 3
     * @var string
     */
    private $content3;
    /**
     * Détail contenu du colis 4
     * @var string
     */
    private $content4;
    /**
     * Détail contenu du colis 5
     * @var string
     */
    private $content5;
    /**
     * Devise de la valeur déclarée en douane
     * @var string
     */
    private $customsCurrency;
    /**
     * Valeur déclarée en douane
     * @var float
     */
    private $customsValue;
    /**
     * Code  événement  de  suivi Chronopost - Champ fixe : DC
     * @var string
     */
    private $evtCode = 'DC';
    /**
     * Devise   de   la   valeur assurée
     * @var string
     */
    private $insuredCurrency;
    /**
     * Valeur assurée
     * @var float
     */
    private $insuredValue;

    /**
     * Type de colis :
     *      DOC : Document
     *      MAR : Marchandise
     * @var string
     */
    private $objectType = "MAR";
    /**
     * @var string
     */
    private $portCurrency;
    /**
     * @var float
     */
    private $portValue;

    /**
     * Code Produit Chronopost<ul>
     * <li>0 : Chrono Retrait Bureau</li>
     * <li>1 : Chrono 13</li>
     * <li>...</li>
     * <li>86 : Chrono Relais</li>
     * <li>...</li></ul>cf ANNEXE 8 : CODES PRODUITS ACCEPTES PAR LE WS SHIPPING
     * @var string
     */
    private $productCode;

    /**
     * Jour de livraison<ul>
     * <li>0 - Normal</li>
     * <li>1 - Livraison  lundi (uniquement  pour  les codes produits nationaux)</li>
     * <li>6 - Livraison  samedi (uniquement  pour  les codes produits nationaux)</li>
     * </ul>
     * @var string
     */
    private $service;

    /**
     * @var \DateTime
     */
    private $shippingDate;

    /**
     * Heure d'expédition
     * Heure de  génération  de  l'envoi  (heure  courante), doit être compris entre 0 et 23
     * @var int
     */
    private $shippingHour;

    /**
     * @var string
     */
    private $skybillRank;            // string

    /**
     * Poids
     * @var float
     */
    private $weight;

    /**
     * Unité de poids
     *      par defaut: KGM (Kilogrammes)
     *      Sous-ensemble  de  la  recommandation 20 de l’UN/ECE
     * @var string
     */
    private $weightUnit = 'KGM';

    /**
     * @return int
     */
    public function getBulkNumber()
    {
        return $this->bulkNumber;
    }

    /**
     * @param int $bulkNumber
     * @return Skybill
     */
    public function setBulkNumber($bulkNumber)
    {
        $this->bulkNumber = $bulkNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Skybill
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return Skybill
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent1()
    {
        return $this->content1;
    }

    /**
     * @param string $content1
     * @return Skybill
     */
    public function setContent1($content1)
    {
        $this->content1 = $content1;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent2()
    {
        return $this->content2;
    }

    /**
     * @param string $content2
     * @return Skybill
     */
    public function setContent2($content2)
    {
        $this->content2 = $content2;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent3()
    {
        return $this->content3;
    }

    /**
     * @param string $content3
     * @return Skybill
     */
    public function setContent3($content3)
    {
        $this->content3 = $content3;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent4()
    {
        return $this->content4;
    }

    /**
     * @param string $content4
     * @return Skybill
     */
    public function setContent4($content4)
    {
        $this->content4 = $content4;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent5()
    {
        return $this->content5;
    }

    /**
     * @param string $content5
     * @return Skybill
     */
    public function setContent5($content5)
    {
        $this->content5 = $content5;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomsCurrency()
    {
        return $this->customsCurrency;
    }

    /**
     * @param string $customsCurrency
     * @return Skybill
     */
    public function setCustomsCurrency($customsCurrency)
    {
        $this->customsCurrency = $customsCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getCustomsValue()
    {
        return $this->customsValue;
    }

    /**
     * @param float $customsValue
     * @return Skybill
     */
    public function setCustomsValue($customsValue)
    {
        $this->customsValue = $customsValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getEvtCode()
    {
        return $this->evtCode;
    }

    /**
     * @param string $evtCode
     * @return Skybill
     */
    public function setEvtCode($evtCode)
    {
        $this->evtCode = $evtCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getInsuredCurrency()
    {
        return $this->insuredCurrency;
    }

    /**
     * @param string $insuredCurrency
     * @return Skybill
     */
    public function setInsuredCurrency($insuredCurrency)
    {
        $this->insuredCurrency = $insuredCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    /**
     * @param float $insuredValue
     * @return Skybill
     */
    public function setInsuredValue($insuredValue)
    {
        $this->insuredValue = $insuredValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     * @return Skybill
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPortCurrency()
    {
        return $this->portCurrency;
    }

    /**
     * @param string $portCurrency
     * @return Skybill
     */
    public function setPortCurrency($portCurrency)
    {
        $this->portCurrency = $portCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getPortValue()
    {
        return $this->portValue;
    }

    /**
     * @param float $portValue
     * @return Skybill
     */
    public function setPortValue($portValue)
    {
        $this->portValue = $portValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return Skybill
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param string $service
     * @return Skybill
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    /**
     * @param \DateTime $shippingDate
     * @return Skybill
     */
    public function setShippingDate($shippingDate)
    {
        $this->shippingDate = $shippingDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippingHour()
    {
        return $this->shippingHour;
    }

    /**
     * @param int $shippingHour
     * @return Skybill
     */
    public function setShippingHour($shippingHour)
    {
        $this->shippingHour = $shippingHour;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkybillRank()
    {
        return $this->skybillRank;
    }

    /**
     * @param string $skybillRank
     * @return Skybill
     */
    public function setSkybillRank($skybillRank)
    {
        $this->skybillRank = $skybillRank;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return Skybill
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * @param string $weightUnit
     * @return Skybill
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }
}