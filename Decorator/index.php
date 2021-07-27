<?php

use App\Car\Cars\Benz;
use App\Car\Cars\Pride;
use App\Car\Decorator\SunRoof;
use App\Car\Decorator\ZevarDar;

require 'vendor/autoload.php';

$pride = new Pride();
$pride = new ZevarDar($pride);

echo $pride->car_name().":".$pride->cost().PHP_EOL. "Description:".$pride->description().PHP_EOL;


$benz = new Benz();
$benz = new SunRoof($benz);
echo $benz->car_name().":".$benz->cost().PHP_EOL. "Description:".$benz->description().PHP_EOL;
