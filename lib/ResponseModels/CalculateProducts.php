<?php


namespace Chronopost\ResponseModels;


use Chronopost\Enums\ETypeEnvoi;
use Chronopost\Enums\ETypeProduit;
use Chronopost\Exceptions\ChronopostWrongValueException;
use DateTime;

class CalculateProducts
{
    /** @var string  */
    private $errorCode ;
    /** @var string */
    private $errorMessage;
    /** @var Product[] */
    private $productList;

    public function __construct($object)
    {
        $this->errorCode = $object->errorCode ?? null;
        $this->errorMessage = $object->errorMessage ?? null;
        $this->productList = [];
        foreach($object->productList AS $productList){
            $this->productList[]= new Product($productList);
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
     * @return Product[]
     */
    public function getProductList(): array
    {
        return $this->productList;
    }



}