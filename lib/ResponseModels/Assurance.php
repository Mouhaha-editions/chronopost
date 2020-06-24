<?php

namespace Chronopost\ResponseModels;


class Assurance
{
    /** @var float */
    public ?float $plafond;
    /** @var float */
    public ?float $taux;

    public function __construct($object)
    {
        $this->plafond = $object->plafond ?? null;
        $this->taux = $object->taux ?? null;
    }
}