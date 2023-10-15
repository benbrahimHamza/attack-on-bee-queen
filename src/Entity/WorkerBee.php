<?php

namespace App\Entity;

class WorkerBee extends AbstractBee
{
    /**
     * @var int
     */
    protected int $lifePoints = 50;

    /**
     * @var int
     */
    protected int $lifeCost = 20;

    /**
     * @var string
     */
    protected string $beeType = "Worker";
}