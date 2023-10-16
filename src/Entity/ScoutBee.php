<?php

namespace App\Entity;

use SplObserver;
use SplSubject;

class ScoutBee extends AbstractBee implements SplObserver
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
    protected string $beeType = parent::SCOUT;

    public function update(\SplSubject $subject): void
    {
        $this->die();
    }
}
