<?php

use App\Service;

require 'vendor/autoload.php';

$publisher = new \App\Publisher();

$mail = new Service('Mail');
$clock = new Service('Clock');
$desktop = new Service("Desktop");


$publisher->register($mail);
$publisher->register($clock);
$publisher->register($desktop);

$publisher->setEvent('do some thing ....');


$publisher->unregister($clock);
$publisher->setEvent('Some thing else...');
