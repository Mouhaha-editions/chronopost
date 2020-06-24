<?php
namespace Chronopost\RequestModels;

use Chronopost\Interfaces\IAccountInformations;

class AccountInformations implements IAccountInformations
{
    /**
     * Numéro de compte
     * @var int
     */
    public $accountNumber;
    /** @var string */
    public $idEmit = 'CHRFR';   // Valeur fixe : CHRFR
    /** @var string */
    public $identWebPro;
    /** @var integer */
    public $subAccount;
    /**
     * Mot de passe correspondant au numéro de compte
     * @var string
     */
    public $password = '';

    /**
     * @return int
     */
    public function getSubAccount()
    {
        return $this->subAccount;
    }

    /**
     * @param int $subAccount
     * @return AccountInformations
     */
    public function setSubAccount($subAccount)
    {
        $this->subAccount = $subAccount;
        return $this;
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
     * @return AccountInformations
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
     * @return AccountInformations
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
     * @return AccountInformations
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
     * @return AccountInformations
     */
    public function setIdentWebPro($identWebPro)
    {
        $this->identWebPro = $identWebPro;
        return $this;
    }

}