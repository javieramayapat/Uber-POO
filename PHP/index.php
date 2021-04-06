<?php

require_once('Car.php');
require_once('Account.php');
require_once('UberX.php');

$uberx =  new UberX("ASTF15", new Account("Javier","AAPJ852"),"Mustang", "Gt-500");
$uberx->printDataCard();