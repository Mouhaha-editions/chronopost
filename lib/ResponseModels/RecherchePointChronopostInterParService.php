<?php


namespace Chronopost\ResponseModels;


class RecherchePointChronopostInterParService
{
    /** @var string  */
    private $errorCode ;
    /** @var string */
    private $errorMessage;
    /** @var string */
    private $qualiteReponse;
    private $wsRequestId;
    private $listePointRelais;

    public function __construct($object)
    {
        $this->errorCode = $object->errorCode ?? null;
        $this->errorMessage = $object->errorMessage ?? null;
        $this->qualiteReponse = $object->qualiteReponse ?? null;
        $this->wsRequestId = $object->wsRequestId ?? null;
        $this->listePointRelais = $object->listePointRelais ?? null;
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
    public function getQualiteReponse(): string
    {
        return $this->qualiteReponse;
    }

    /**
     * @return null
     */
    public function getWsRequestId()
    {
        return $this->wsRequestId;
    }

    /**
     * @return null
     */
    public function getListePointRelais()
    {
        return $this->listePointRelais;
    }



}