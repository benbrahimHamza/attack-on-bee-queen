<?php

require __DIR__ . '/vendor/autoload.php';

session_start();

$beePopulation = $_SESSION["beePopulation"];

$target = rand(0, count($beePopulation) - 1);

$beePopulation[$target]->takeDamage();

if ($beePopulation[$target]->getLifePoints() == 0)
{
    array_splice($beePopulation, $target, 1);
}

$_SESSION["beePopulation"] = $beePopulation;

echo implode(" ", $beePopulation);