<?php
namespace Chronopost\Classes;


class Shipping
{
    /**
     * Paramètres Enlèvement Sur Demande
     * @var PickUpOnDemand
     */
    //private $esd;

    /** @var Header */
    private $header;

    /**
     * Adresse expéditeur
     * @var Shipper
     */
    private $shipper;

    /**
     * Adresse du client
     * @var Customer
     */
    private $customer;

    /**
     * Adresse du destinataire
     * @var Recipient
     */
    private $recipient;

    /**
     * Références expéditeur et destinataire, code barre client
     * @var Reference
     */
    private $reference;

    /**
     * Caractéristique de colis : poids, produit, ...
     * @var Skybill
     */
    private $skybill;

    /**
     * @var SkybillParameter
     */
    private $skybillParams;

    public function __construct()
    {
        //$this->esd = new Esd();
        $this->header = new Header();
        $this->shipper = new Shipper();
        $this->customer = new Customer();
        $this->recipient = new Recipient();
        $this->reference = new Reference();
        $this->skybill = new Skybill();
        $this->skybillParams = new SkybillParameter();
    }

    /**
     * @return Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param Header $header
     * @return Shipping
     */
    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return Shipper
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * @param Shipper $shipper
     * @return Shipping
     */
    public function setShipper($shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return Shipping
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return Recipient
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param Recipient $recipient
     * @return Shipping
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return Reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param Reference $reference
     * @return Shipping
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return Skybill
     */
    public function getSkybill()
    {
        return $this->skybill;
    }

    /**
     * @param Skybill $skybill
     * @return Shipping
     */
    public function setSkybill($skybill)
    {
        $this->skybill = $skybill;
        return $this;
    }

    /**
     * @return SkybillParameter
     */
    public function getSkybillParams()
    {
        return $this->skybillParams;
    }

    /**
     * @param SkybillParameter $skybillParams
     * @return Shipping
     */
    public function setSkybillParams($skybillParams)
    {
        $this->skybillParams = $skybillParams;
        return $this;
    }




}