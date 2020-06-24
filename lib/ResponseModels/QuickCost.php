<?php


namespace Chronopost\ResponseModels;


use Chronopost\Enums\ETypeProduit;
use Chronopost\Exceptions\ChronopostWrongValueException;

class QuickCost
{

    /** @var string */
    private $errorCode;
    /** @var string */
    private $errorMessage;
    /** @var string */
    private $zone;
    /** @var string */
    private $amount;
    /** @var string */
    private $amountTTC;
    /** @var string */
    private $amountTVA;
    /** @var Service[] */
    private $service;
    /** @var Assurance[] */
    private $assurance;

    public function __construct($object)
    {
        $this->errorCode = $object->errorCode ?? null;
        $this->errorMessage = $object->errorMessage ?? null;
        $this->zone = $object->zone ?? null;
        $this->amount = $object->amount ?? null;
        $this->amountTTC = $object->amountTTC ?? null;
        $this->amountTVA = $object->amountTVA ?? null;
        $this->service = [];
        $this->assurance = [];
        foreach($object->service AS $service){
            $this->service[]= new Service($service);
        }
        foreach($object->assurance AS $assurance){
            $this->assurance[]= new Assurance($assurance);
        }
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @return string
     */
    public function getZone(): string
    {
        return $this->zone;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getAmountTTC(): string
    {
        return $this->amountTTC;
    }

    /**
     * @return string
     */
    public function getAmountTVA(): string
    {
        return $this->amountTVA;
    }

    /**
     * @return Service[]
     */
    public function getService(): array
    {
        return $this->service;
    }

    /**
     * @return Assurance[]
     */
    public function getAssurance(): array
    {
        return $this->assurance;
    }


}