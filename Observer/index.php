<?php

use App\Publisher;
use App\Service;

require 'vendor/autoload.php';

$publisher = new Publisher();

$mail = new Service('Mail');
$clock = new Service('Clock');

$publisher->register($mail);
$publisher->register($clock);

$publisher->setEvent('do some thing ...');

$publisher->unregister($mail);

$publisher->setEvent('Do some thing else');