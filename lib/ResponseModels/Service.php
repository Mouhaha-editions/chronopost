<?php


namespace Chronopost\ResponseModels;


class Service
{
    /**
     * @var string
     */
    private $codeService;
    /**
     * @var string
     */
    private $label;
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

    public function __construct($object)
    {
        $this->amount = $object->amount ?? null;
        $this->amountTTC = $object->amountTTC ?? null;
        $this->amountTVA = $object->amountTVA ?? null;
        $this->label = $object->label ?? null;
        $this->codeService = $object->codeService ?? null;
    }

    /**
     * @return string
     */
    public function getCodeService(): string
    {
        return $this->codeService;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
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


}