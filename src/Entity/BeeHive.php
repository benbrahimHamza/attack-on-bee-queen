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
        $this->beePopulation[]= new QueenBee(1);

        for ($i = 0; $i < self::WORKERBEE_COUNT; $i++)
        {
            $this->beePopulation[]= new WorkerBee($i + 1);
        }

        for ($i = 0; $i < self::SCOUTBEE_COUNT; $i++)
        {
            $this->beePopulation[]= new ScoutBee($i + 1);
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