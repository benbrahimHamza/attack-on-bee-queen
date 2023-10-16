<?php

use App\Entity\AbstractBee;

require __DIR__ . '/vendor/autoload.php';

session_start();

$beePopulation = $_SESSION["beePopulation"];

$target = rand(0, count($beePopulation) - 1);

$beePopulation[$target]->takeDamage();

if ($beePopulation[$target]->getLifePoints() == 0 && $beePopulation[0]->getBeeStatus() !== AbstractBee::DEAD)
{
    array_splice($beePopulation, $target, 1);
    $_SESSION["beePopulation"] = $beePopulation;
}
echo implode(" ", $beePopulation);

if ($beePopulation[0]->getBeeStatus() === AbstractBee::DEAD) {
    echo("<meta http-equiv='refresh' content='1'>");
}
