<?php

namespace Chronopost\Classes;

class Header
{
    /**
     * Numéro de compte
     * @var int
     */
    public $accountNumber;
    /** @var string */
//    public $idEmit = 'CHRFR';   // Valeur fixe : CHRFR
    /** @var string */
//    public $identWebPro;
    /** @var integer */
//    public $subAccount;
    /**
     * Mot de passe correspondant au numéro de compte
     * @var string
     */
    public $password = '';

    public function __construct($accountNumber, $password)
    {
        $this->accountNumber = $accountNumber;
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getSubAccount()
    {
        return $this->subAccount;
    }

    /**
     * @param int $subAccount
     * @return Header
     */
    public function setSubAccount($subAccount)
    {
        $this->subAccount = $subAccount;
        return $this;
    }

    public function __serialize()
    {
        $r = [
            'accountNumber' => $this->getAccountNumber(),
            'password' => $this->getPassword()
        ];

        if ($this->getIdEmit() != null) {
            $r['idEmit'] = $this->getIdEmit();
        }

        if ($this->getIdentWebPro() != null) {
            $r['identWebPro'] = $this->getIdentWebPro();
        }

        if ($this->getSubAccount() != null) {
            $r['subAccount'] = $this->getSubAccount();
        }

        return $r;
    }

    /**
     * @return int
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param int $accountNumber
     * @return Header
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Header
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdEmit()
    {
        return $this->idEmit;
    }

    /**
     * @param string $idEmit
     * @return Header
     */
    public function setIdEmit($idEmit)
    {
        $this->idEmit = $idEmit;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentWebPro()
    {
        return $this->identWebPro;
    }

    /**
     * @param string $identWebPro
     * @return Header
     */
    public function setIdentWebPro($identWebPro)
    {
        $this->identWebPro = $identWebPro;
        return $this;
    }

}