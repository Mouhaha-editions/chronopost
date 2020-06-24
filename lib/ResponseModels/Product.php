<?php
namespace Chronopost\ResponseModels;


class Product
{
    /**
     * @var string
     */
    private $amount;
    /**
     * @var string
     */
    private $amountTTC;
    /**
     * @var string
     */
    private $amountTVA;
    /**
     * @var string
     */
    private $productCode;

    public function __construct($object)
    {
        $this->amount = $object->amount ?? null ;
        $this->amountTTC = $object->amountTTC ?? null ;
        $this->amountTVA = $object->amountTVA ?? null ;
        $this->productCode = $object->productCode ?? null ;
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
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }


}