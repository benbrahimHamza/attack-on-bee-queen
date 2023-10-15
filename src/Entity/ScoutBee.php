<?php

namespace App\Entity;

class ScoutBee extends AbstractBee
{
    /**
     * @var int
     */
    protected int $lifePoints = 30;

    /**
     * @var int
     */
    protected int $lifeCost = 15;

    /**
     * @var string
     */
    protected string $beeType = "Scout";
}