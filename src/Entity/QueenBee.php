<?php

namespace App\Entity;

use SplObserver;

class QueenBee extends AbstractBee implements \SplSubject
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
    protected string $beeType = parent::QUEEN;

    /**
     * @var array
     */
    private $observers = array();

    public function die(): void
    {
        parent::die();
        $this->notify();
    }

    //add observer
    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }
    
    //remove observer
    public function detach(SplObserver $observer): void
    {
        $key = array_search($observer,$this->observers, true);
        if($key){
            unset($this->observers[$key]);
        }
    }

    //notify observers(or some of them)
    public function notify(): void
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}