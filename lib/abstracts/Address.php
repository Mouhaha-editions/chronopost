<?php


namespace Chronopost\Abstracts;


abstract class  Address
{
    /** @var string */
    private $adress1;
    /** @var string */
    private $adress2;
    /** @var string */
    private $city;
    /** @var string */
    private $civility;
    /** @var string */
    private $contactName;
    /**
     * Utiliser le standard ISO 3166(ISO ALPHA-2 Country Code)
     * @var string
     */
    private $country;
    /** @var string */
    private $countryName;
    /** @var string */
    private $email;
    /** @var string */
    private $mobilePhone;
    /** @var string */
    private $name;
    /** @var string */
    private $name2;
    /** @var string */
    private $phone;
    /** @var string */
    private $zipCode;

    /**
     * Type de préalerte (MAS)<ul>
     *    <li>0 : pas de préalerte</li>
     *    <li>11 : abonnement tracking expéditeur</li></ul>
     * @var int
     */
    private $preAlert = 0;


    /**
     * @return string
     */
    public function getAdress1()
    {
        return $this->adress1;
    }

    /**
     * @param string $adress1
     * @return Address
     */
    public function setAdress1($adress1)
    {
        $this->adress1 = $adress1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdress2()
    {
        return $this->adress2;
    }

    /**
     * @param string $adress2
     * @return Address
     */
    public function setAdress2($adress2)
    {
        $this->adress2 = $adress2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * @param string $civility
     * @return Address
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @param string $contactName
     * @return Address
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return Address
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Address
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return Address
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Address
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * @param string $name2
     * @return Address
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Address
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return Address
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getPreAlert()
    {
        return $this->preAlert;
    }

    /**
     * @param int $preAlert
     * @return Address
     */
    public function setPreAlert($preAlert)
    {
        $this->preAlert = $preAlert;
        return $this;
    }


}