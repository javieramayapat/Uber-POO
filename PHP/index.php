<?php

require_once('Car.php');
require_once('Account.php');
require_once('UberX.php');
require_once('UberPool.php');

$uberx =  new UberX("ASTF15", new Account("Javier","AAPJ852"),"Mustang", "Gt-500",5);
$uberx->printDataCard();

$uberPool = new UberPool("HDTSG45", new Account("Mariana","MAR542245"),"Suburban","HY-25",5);
$uberPool->printDataCard();