<?php

require_once('Account.php');
class Car {

    public $id;
    public $licence;
    public $driver;
    public $passenger;

    public function __construct($licence, $driver, $passenger)
    {
        $this->license = $licence;
        $this->driver = $driver;
        $this->passenger = $passenger;
    }

    public function printDataCard()
    {
        echo("Licencia: $this->license 
              <br> Driver: " . $this->driver->name .
              "<br> Document: " . $this->driver->document .
              "<br> Passengers: " . $this->passenger .
              "<br>"
            );
    }
}
