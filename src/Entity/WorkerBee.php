<?php

namespace App\Entity;

use SplObserver;

class WorkerBee extends AbstractBee implements SplObserver
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

    public function update(\SplSubject $subject): void
    {
        $this->die();
    }
}