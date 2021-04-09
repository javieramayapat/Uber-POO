<?php

require_once('Car.php');

class UberBlack extends Car
{
    public $typeCarAccepted;
    public $seatsMaterial;

    public function UberBlack($licence, $driver, $typeCarAccepted, $seatsMaterial,$passenger)
    {
        parent::__construct($licence, $driver,$passenger);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }
}
