<?php

namespace Chronopost\ResponseModels;


class Assurance
{
    /** @var float */
    public $plafond;
    /** @var float */
    public $taux;

    public function __construct($object)
    {
        $this->plafond = $object->plafond ?? null;
        $this->taux = $object->taux ?? null;
    }
}