<?php


namespace Chronopost\ResponseModels;


use Chronopost\Enums\ETypeEnvoi;
use Chronopost\Enums\ETypeProduit;
use Chronopost\Exceptions\ChronopostWrongValueException;
use DateTime;

class CalculateDeliveryTime
{
    /** @var string  */
    private $errorCode ;
    /** @var string */
    private $errorMessage;
    /** @var string */
    private $date;

    public function __construct($object)
    {
        $this->errorCode = $object->errorCode ?? null;
        $this->errorMessage = $object->errorMessage ?? null;
        $this->date = $object->date ?? null;
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
    public function getDate(): ?string
    {
        return $this->date;
    }



}