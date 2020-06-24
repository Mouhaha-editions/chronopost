<?php


namespace Chronopost\RequestModels;


use Chronopost\Enums\ECodeProduit;
use Chronopost\Enums\ETypeProduit;
use Chronopost\Exceptions\ChronopostWrongValueException;

class QuickCost extends AccountInformations
{

    /** @var string */
    private $depCode;
    /** @var string */
    private $arrCode;
    /** @var string */
    private $weight;
    /** @var string */
    private $productCode;
    /** @var string */
    private $type;

    public function __construct($depCode = "FR", $arrCode = "FR", $weight = 1, $productCode = ECodeProduit::CHRONO_CLASSIC, $type = ETypeProduit::MATERIEL)
    {
        $this->depCode = $depCode;
        $this->arrCode = $arrCode;
        $this->weight = $weight;
        $this->productCode = $productCode;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDepCode(): string
    {
        return $this->depCode;
    }

    /**
     * @param string $depCode
     * @return QuickCost
     */
    public function setDepCode(string $depCode): QuickCost
    {
        $this->depCode = $depCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getArrCode(): string
    {
        return $this->arrCode;
    }

    /**
     * @param string $arrCode
     * @return QuickCost
     */
    public function setArrCode(string $arrCode): QuickCost
    {
        $this->arrCode = $arrCode;
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
     * @return QuickCost
     */
    public function setWeight(string $weight): QuickCost
    {
        $this->weight = $weight;
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
     * @return QuickCost
     */
    public function setProductCode(string $productCode): QuickCost
    {
        $this->productCode = $productCode;
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
     * @return QuickCost
     * @throws ChronopostWrongValueException
     */
    public function setType($type)
    {
        if (in_array($type, [ETypeProduit::MATERIEL, ETypeProduit::DOCUMENT])) {
            throw new ChronopostWrongValueException("Seules les valeurs M et D sont autorisées, voir ETypeProduit");
        }
        $this->type = $type;
        return $this;
    }


}