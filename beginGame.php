<?php

require __DIR__ . '/vendor/autoload.php';

use App\Entity\BeeHive;

session_start();

$beeHive = new BeeHive();
$beePopulation = $beeHive->getBeePopulation();
$_SESSION['beePopulation'] = $beePopulation;
echo implode(" ", $beePopulation);
