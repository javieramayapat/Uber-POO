<?php

require_once('Account.php');
class Car {

    public $id;
    public $licence;
    public $driver;
    public $passenger;

    public function __construct($licence, $driver)
    {
        $this->license = $licence;
        $this->driver = $driver;
    }

    public function printDataCard()
    {
        echo("Licencia: $this->license  Driver: " . $this->driver->name );
    }
}
