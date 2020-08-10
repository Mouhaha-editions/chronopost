<?php


namespace Chronopost\RequestModels;


use Chronopost\Enums\ECodeProduit;
use Chronopost\Enums\ETypeProduit;
use DateTime;

class CalculateDeliveryTime //extends AccountInformations
{
    private $depCountryCode;
    private $depZipCode;
    private $arrCountryCode;
    private $arrZipCode;
    private $arrCity;
    private $productCode;
    private $type;
    private $service;
    private $shippingDate;

    public function __construct($depCountryCode = "FR", $depZipCode = "30200", $arrCountryCode = "FR", $arrZipCode = "30200", $arrCity = "Moloy",$productCode = ECodeProduit::CHRONO_13, $type = ETypeProduit::MATERIEL, $service = 6, ?DateTime $shippingDate = null)
    {
        $this->depCountryCode = $depCountryCode;
        $this->depZipCode = $depZipCode;
        $this->arrCountryCode = $arrCountryCode;
        $this->arrZipCode = $arrZipCode;
        $this->arrCity = $arrCity;
        $this->productCode = $productCode;
        $this->type = $type;
        $this->service = $service;
        $this->setShippingDate($shippingDate ?? new DateTime());
    }

    /**
     * @return string|null
     */
    public function getDepCountryCode(): ?string
    {
        return $this->depCountryCode;
    }

    /**
     * @param string|null $depCountryCode
     * @return CalculateDeliveryTime
     */
    public function setDepCountryCode(?string $depCountryCode): CalculateDeliveryTime
    {
        $this->depCountryCode = $depCountryCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDepZipCode(): ?string
    {
        return $this->depZipCode;
    }

    /**
     * @param string|null $depZipCode
     * @return CalculateDeliveryTime
     */
    public function setDepZipCode(?string $depZipCode): CalculateDeliveryTime
    {
        $this->depZipCode = $depZipCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getArrCountryCode(): ?string
    {
        return $this->arrCountryCode;
    }

    /**
     * @param string|null $arrCountryCode
     * @return CalculateDeliveryTime
     */
    public function setArrCountryCode(?string $arrCountryCode): CalculateDeliveryTime
    {
        $this->arrCountryCode = $arrCountryCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getArrZipCode(): ?string
    {
        return $this->arrZipCode;
    }

    /**
     * @param string|null $arrZipCode
     * @return CalculateDeliveryTime
     */
    public function setArrZipCode(?string $arrZipCode): CalculateDeliveryTime
    {
        $this->arrZipCode = $arrZipCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getArrCity(): ?string
    {
        return $this->arrCity;
    }

    /**
     * @param string|null $arrCity
     * @return CalculateDeliveryTime
     */
    public function setArrCity(?string $arrCity): CalculateDeliveryTime
    {
        $this->arrCity = $arrCity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * @param string|null $productCode
     * @return CalculateDeliveryTime
     */
    public function setProductCode(?string $productCode): CalculateDeliveryTime
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return CalculateDeliveryTime
     */
    public function setType(?string $type): CalculateDeliveryTime
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int|string|null
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param int|string|null $service
     * @return CalculateDeliveryTime
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }

    /**
     * @param string|null $shippingDate
     * @return CalculateDeliveryTime
     */
    public function setShippingDate(DateTime $shippingDate): CalculateDeliveryTime
    {
        $this->shippingDate = $shippingDate->format('d/m/Y');
        return $this;
    }


}