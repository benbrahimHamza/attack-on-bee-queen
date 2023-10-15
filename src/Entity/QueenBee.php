<?php

namespace App\Entity;

class QueenBee extends AbstractBee
{
    /**
     * @var int
     */
    protected int $lifePoints = 100;

    /**
     * @var int
     */
    protected int $lifeCost = 15;

    /**
     * @var string
     */
    protected string $beeType = "Queen";
}