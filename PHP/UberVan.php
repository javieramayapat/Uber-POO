<?php

require_once('Car.php');

class UberVan extends Car
{
    public $typeCarAccepted;
    public $seatsMaterial;

    public function UberVan($licence, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::__construct($licence, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }
}
