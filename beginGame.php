<?php

require __DIR__ . '/vendor/autoload.php';

use App\Entity\BeeHive;


session_start();

/*session is started if you don't write this line can't use $_Session  global variable*/


$beeHive = new BeeHive();
$beePopulation = $beeHive->getBeePopulation();
$_SESSION['beePopulation'] = $beePopulation;
echo implode(" ", $beePopulation);
