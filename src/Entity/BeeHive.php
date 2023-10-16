<?php

namespace App\Entity;

use App\Entity\AbstractBee;

class BeeHive
{
    const WORKERBEE_COUNT = 5;
    const SCOUTBEE_COUNT = 8;

    /**
     * @var AbstractBee[]
     */
    private array $beePopulation = [];

    public function __construct()
    {
        $newQueenBee = new QueenBee(1);
        $this->beePopulation[]= $newQueenBee;

        for ($i = 0; $i < self::WORKERBEE_COUNT; $i++)
        {
            $newWokerBee = new WorkerBee($i + 1);
            $newQueenBee->attach($newWokerBee);
            $this->beePopulation[]= $newWokerBee;
        }

        for ($i = 0; $i < self::SCOUTBEE_COUNT; $i++)
        {
            $newScoutBee = new ScoutBee($i + 1);
            $newQueenBee->attach($newScoutBee);
            $this->beePopulation[]= $newScoutBee;
        }
    }

    /**
     * @return AbstractBee[]
     */
    public function getBeePopulation()
    {
        return $this->beePopulation;
    }
}