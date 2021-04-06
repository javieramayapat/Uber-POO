<?php

require_once('Car.php');

class UberBlack extends Car
{
    public $typeCarAccepted;
    public $seatsMaterial;

    public function UberBlack($licence, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::__construct($licence, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }
}
