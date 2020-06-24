<?php


namespace Chronopost\RequestModels;


use Chronopost\Enums\ETypeEnvoi;
use Chronopost\Enums\ETypeProduit;
use Chronopost\Exceptions\ChronopostWrongValueException;
use DateTime;

class CalculateProducts extends AccountInformations
{
    private $depCountryCode;
    private $depZipCode;
    private $arrCountryCode;
    private $arrZipCode;
    private $arrCity;
    private $type;
    private $weight;
    private $height;
    private $length;
    private $width;
    private $shippingDate;

    public function __construct($depCountryCode = "FR", $depZipCode = "30200", $arrCountryCode = "FR", $arrZipCode = "30200", $arrCity = "Moloy", $type = ETypeProduit::MATERIEL, $weight = "1", $height = "1", $length = "1", $width = "1", ?DateTime $shippingDate = null)
    {
        $this->depCountryCode = $depCountryCode;
        $this->depZipCode = $depZipCode;
        $this->arrCountryCode = $arrCountryCode;
        $this->arrZipCode = $arrZipCode;
        $this->arrCity = $arrCity;
        $this->type = $type;
        $this->weight = $weight;
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
        $this->setShippingDate($shippingDate ?? new DateTime());
    }

    /**
     * @return false|string
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    /**
     * @param DateTime $shippingDate
     * @return CalculateProducts
     */
    public function setShippingDate(DateTime $shippingDate)
    {
        $this->shippingDate = $shippingDate->format('d/m/Y');
        return $this;
    }

    /**
     * @return string
     */
    public function getDepCountryCode()
    {
        return $this->depCountryCode;
    }

    /**
     * @param string $depCountryCode
     * @return CalculateProducts
     */
    public function setDepCountryCode($depCountryCode)
    {
        $this->depCountryCode = $depCountryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepZipCode()
    {
        return $this->depZipCode;
    }

    /**
     * @param string $depZipCode
     * @return CalculateProducts
     */
    public function setDepZipCode($depZipCode)
    {
        $this->depZipCode = $depZipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getArrCountryCode()
    {
        return $this->arrCountryCode;
    }

    /**
     * @param string $arrCountryCode
     * @return CalculateProducts
     */
    public function setArrCountryCode($arrCountryCode)
    {
        $this->arrCountryCode = $arrCountryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getArrZipCode()
    {
        return $this->arrZipCode;
    }

    /**
     * @param string $arrZipCode
     * @return CalculateProducts
     */
    public function setArrZipCode($arrZipCode)
    {
        $this->arrZipCode = $arrZipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getArrCity()
    {
        return $this->arrCity;
    }

    /**
     * @param string $arrCity
     * @return CalculateProducts
     */
    public function setArrCity($arrCity)
    {
        $this->arrCity = $arrCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return CalculateProducts
     */
    public function setType($type)
    {
        if (in_array($type, [ETypeProduit::MATERIEL, ETypeProduit::DOCUMENT])) {
            throw new ChronopostWrongValueException("Seules les valeurs M et D sont autorisées, voir ETypeProduit");
        }
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     * @return CalculateProducts
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $height
     * @return CalculateProducts
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $length
     * @return CalculateProducts
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $width
     * @return CalculateProducts
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

}