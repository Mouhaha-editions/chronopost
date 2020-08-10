<?php


namespace Chronopost\RequestModels;


use Chronopost\Enums\ECodeProduit;
use Chronopost\Enums\EServiceList;
use DateTime;

class RecherchePointChronopostInterParService extends AccountInformations
{
    /**
     * @var string
     */
    private $adress;
    /**
     * @var string
     */
    private $zipCode;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $countryCode;
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $productCode;
    /**
     * @var string
     */
    private $service;
    /**
     * @var string
     */
    private $weight;
    /**
     * @var string
     */
    private $shippingDate;
    /**
     * @var string
     */
    private $maxPointChronopost;
    /**
     * @var string
     */
    private $maxDistanceSearch;
    /**
     * @var string
     */
    private $holidayTolerant;
    /**
     * @var string
     */
    private $serviceList;
    /**
     * @var string
     */
    private $language;
    /**
     * @var string
     */
    private $version;

    public function __construct($adress = "15 impasse du pas du roule", $zipCode = "30200", $city = "Chusclan", $countryCode = "FR", $weight = "1", ?DateTime $shippingDate = null, $productCode = ECodeProduit::CHRONO_13, $type = "P", $service = "L", $maxPointChronopost = "25", $maxDistanceSearch = "40", $holidayTolerant = "1", $serviceList = EServiceList::RETRAIT, $language = "FR", $version = "2.0")
    {
        $this->adress = $adress;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->countryCode = $countryCode;
        $this->type = $type;
        $this->productCode = $productCode;
        $this->service = $service;
        $this->weight = $weight;
        $this->maxPointChronopost = $maxPointChronopost;
        $this->maxDistanceSearch = $maxDistanceSearch;
        $this->holidayTolerant = $holidayTolerant;
        $this->serviceList = $serviceList;
        $this->language = $language;
        $this->version = $version;
        $this->setShippingDate($shippingDate ?? new DateTime());
    }

    /**
     * @return string
     */
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     * @return RecherchePointChronopostInterParService
     */
    public function setAdress(string $adress): RecherchePointChronopostInterParService
    {
        $this->adress = $adress;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return RecherchePointChronopostInterParService
     */
    public function setZipCode(string $zipCode): RecherchePointChronopostInterParService
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return RecherchePointChronopostInterParService
     */
    public function setCity(string $city): RecherchePointChronopostInterParService
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return RecherchePointChronopostInterParService
     */
    public function setCountryCode(string $countryCode): RecherchePointChronopostInterParService
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return RecherchePointChronopostInterParService
     */
    public function setType(string $type): RecherchePointChronopostInterParService
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return RecherchePointChronopostInterParService
     */
    public function setProductCode(string $productCode): RecherchePointChronopostInterParService
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * @param string $service
     * @return RecherchePointChronopostInterParService
     */
    public function setService(string $service): RecherchePointChronopostInterParService
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     * @return RecherchePointChronopostInterParService
     */
    public function setWeight(string $weight): RecherchePointChronopostInterParService
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingDate(): string
    {
        return $this->shippingDate;
    }

    /**
     * @param DateTime $shippingDate
     * @return RecherchePointChronopostInterParService
     */
    public function setShippingDate(DateTime $shippingDate): RecherchePointChronopostInterParService
    {
        $this->shippingDate = $shippingDate->format('d/m/Y');
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxPointChronopost(): string
    {
        return $this->maxPointChronopost;
    }

    /**
     * @param string $maxPointChronopost
     * @return RecherchePointChronopostInterParService
     */
    public function setMaxPointChronopost(string $maxPointChronopost): RecherchePointChronopostInterParService
    {
        $this->maxPointChronopost = $maxPointChronopost;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxDistanceSearch(): string
    {
        return $this->maxDistanceSearch;
    }

    /**
     * @param string $maxDistanceSearch
     * @return RecherchePointChronopostInterParService
     */
    public function setMaxDistanceSearch(string $maxDistanceSearch): RecherchePointChronopostInterParService
    {
        $this->maxDistanceSearch = $maxDistanceSearch;
        return $this;
    }

    /**
     * @return string
     */
    public function getHolidayTolerant(): string
    {
        return $this->holidayTolerant;
    }

    /**
     * @param string $holidayTolerant
     * @return RecherchePointChronopostInterParService
     */
    public function setHolidayTolerant(string $holidayTolerant): RecherchePointChronopostInterParService
    {
        $this->holidayTolerant = $holidayTolerant;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceList(): string
    {
        return $this->serviceList;
    }

    /**
     * @param string $serviceList
     * @return RecherchePointChronopostInterParService
     */
    public function setServiceList(string $serviceList): RecherchePointChronopostInterParService
    {
        $this->serviceList = $serviceList;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return RecherchePointChronopostInterParService
     */
    public function setLanguage(string $language): RecherchePointChronopostInterParService
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return RecherchePointChronopostInterParService
     */
    public function setVersion(string $version): RecherchePointChronopostInterParService
    {
        $this->version = $version;
        return $this;
    }


}