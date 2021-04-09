<?php

require_once('Car.php');

class UberVan extends Car
{
    public $typeCarAccepted;
    public $seatsMaterial;

    public function UberVan($licence, $driver, $typeCarAccepted, $seatsMaterial, $passenger)
    {
        parent::__construct($licence, $driver, $passenger);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }
}
