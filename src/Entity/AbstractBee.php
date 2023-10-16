<?php

namespace App\Entity;

abstract class AbstractBee implements AttackableObjectInterface
{
    const QUEEN = 'Queen';
    const WORKER = 'Worker';
    const SCOUT = 'Scout';

    const ALIVE = 1;
    const DEAD = 0;
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
     * @var string
     */
    protected string $beeType;

    /**
     * @var int
     */
    protected int $beeStatus;

    /**
     * @param int $beeId Always set up a bee with an Id
     */
    public function __construct(int $beeId)
    {
        $this->beeId = $beeId;
        $this->beeStatus = self::ALIVE;
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
    public function setLifePoints(int $lifePoints): void
    {
        $this->lifePoints = $lifePoints;
    }

    /**
     * @return string
     */
    public function getBeeType(): string
    {
        return $this->beeType;
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

    /**
     * @return int 
     */
    public function getBeeStatus(): int
    {
        return $this->beeStatus;
    }

    public function die(): void
    {
        $this->lifePoints = 0;
        $this->beeStatus = self::DEAD;
    }

    public function takeDamage(): void
    {
        $newLifeValue = $this->lifePoints - $this->lifeCost;
        
        if ($newLifeValue <= 0)
        {
            $this->die();
            return ;
        }

        $this->setLifePoints($newLifeValue);
    }

    public function __toString()
    {
        return '<p>' . $this->getBeeType() . $this->getBeeId() . ' ' . $this->getLifePoints() . '</p>';
    }

}
