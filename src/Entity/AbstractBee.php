<?php

namespace App\Entity;

abstract class AbstractBee implements AttackableObjectInterface
{
    /**
     * @var int
     */
    private int $beeId;

    /**
     * @var int
     */
    protected int $lifePoints;

    /**
     * @var int
     */
    protected int $lifeCost;

    /**
     * @param int $beeId Always set up a bee with an Id
     */
    public function __construct(int $beeId)
    {
        $this->beeId = $beeId;
    }

    /**
     * @return int 
     */
    public function getBeeId(): int
    {
        return $this->beeId;
    }

    /**
     * @return int 
     */
    public function getLifePoints(): int
    {
        return $this->lifePoints;
    }

    /**
     * @param int $lifePoints
     */
    private function setLifePoints(int $lifePoints): void
    {
        $this->lifePoints = $lifePoints;
    }
    
    /**
     * @return int 
     */
    public function getLifeCost(): int
    {
        return $this->lifeCost;
    }

    /**
     * @param int $lifeCost
     */
    public function setLifeCost($lifeCost): void
    {
        $this->lifeCost= $lifeCost;
    }

    public function die(): void
    {
        $this->lifePoints = 0;
    }

    public function takeDamage(): void
    {
        if ($this->lifePoints < $this->lifeCost)
        {
            $this->die();
        }
        
        $newLifeValue = $this->lifePoints - $this->lifeCost;

        $this->setLifePoints($newLifeValue);
    }

}
