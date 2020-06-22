<?php
namespace Chronopost\Classes;


class Reference
{
    /**
     * Numéro de colis client
     * Ce numéro de colis s’il est renseigné apparaitera sous forme de code barre sur
     * l’étiquette si celle-ci est de format A4 (champs mode positionné à SPD ou à PDF)
     * ou en format ZPL pour imprimante thermique (champs mode positionné à Z2D).
     * A noter que ce numéro sera automatiquement tronqué s’il dépasse 15 caractères.
     * @var string
     */
    private $SkybillReference;


    /**
     * Référence Destinataire
     * Champ libre (imprimable sur la facture).
     * Cette valeur peut être utilisée ensuite comme critère de recherche dans le suivi.
     * Dans le cas des produits Chrono Relais (86), Chrono Relais 9 (80), Chrono Relais Europe (3T)
     *  et Chrono Zengo Relais 13 (3K) ce champs doit être rempli avec le code du point relais.
     *
     * @var string
     */
    private $recipientReference;

    /**
     * Référence Expéditeur
     * Champ libre (imprimable sur la facture).
     * Cette valeur peut être utilisée ensuite comme critère de recherche dans le suivi.
     * @var string
     */
    private $shipperReference;

    /**
     * @return string
     */
    public function getSkybillReference()
    {
        return $this->SkybillReference;
    }

    /**
     * @param string $SkybillReference
     * @return Reference
     */
    public function setSkybillReference($SkybillReference)
    {
        $this->SkybillReference = $SkybillReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientReference()
    {
        return $this->recipientReference;
    }

    /**
     * @param string $recipientReference
     * @return Reference
     */
    public function setRecipientReference($recipientReference)
    {
        $this->recipientReference = $recipientReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperReference()
    {
        return $this->shipperReference;
    }

    /**
     * @param string $shipperReference
     * @return Reference
     */
    public function setShipperReference($shipperReference)
    {
        $this->shipperReference = $shipperReference;
        return $this;
    }


}