<?php
namespace Chronopost\Classes;

use DateTime;


/**
 * Objet Enlèvement Sur Demande
 */
class PickUpOnDemand
{
    /** @var DateTime */
    private $closingDateTime;
    /** @var float */
    private $height;
    /** @var float */
    private $length;
    /** @var DateTime */
    private $retrievalDateTime;
    /** @var string */
    private $shipperBuildingFloor;
    /** @var string */
    private $shipperCarriesCode;
    /** @var string */
    private $shipperServiceDirection;
    /** @var string */
    private $specificInstructions;
    /** @var float */
    private $width;

    /**
     * @return DateTime
     */
    public function getClosingDateTime()
    {
        return $this->closingDateTime;
    }

    /**
     * @param DateTime $closingDateTime
     * @return $this
     */
    public function setClosingDateTime($closingDateTime)
    {
        $this->closingDateTime = $closingDateTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param float $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param float $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getRetrievalDateTime()
    {
        return $this->retrievalDateTime;
    }

    /**
     * @param DateTime $retrievalDateTime
     * @return $this
     */
    public function setRetrievalDateTime($retrievalDateTime)
    {
        $this->retrievalDateTime = $retrievalDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperBuildingFloor()
    {
        return $this->shipperBuildingFloor;
    }

    /**
     * @param string $shipperBuildingFloor
     * @return $this
     */
    public function setShipperBuildingFloor($shipperBuildingFloor)
    {
        $this->shipperBuildingFloor = $shipperBuildingFloor;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperCarriesCode()
    {
        return $this->shipperCarriesCode;
    }

    /**
     * @param string $shipperCarriesCode
     * @return $this
     */
    public function setShipperCarriesCode($shipperCarriesCode)
    {
        $this->shipperCarriesCode = $shipperCarriesCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperServiceDirection()
    {
        return $this->shipperServiceDirection;
    }

    /**
     * @param string $shipperServiceDirection
     * @return $this
     */
    public function setShipperServiceDirection($shipperServiceDirection)
    {
        $this->shipperServiceDirection = $shipperServiceDirection;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecificInstructions()
    {
        return $this->specificInstructions;
    }

    /**
     * @param string $specificInstructions
     * @return $this
     */
    public function setSpecificInstructions($specificInstructions)
    {
        $this->specificInstructions = $specificInstructions;
        return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param float $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }



}