<?php

require_once('Car.php');

class UberPool extends car
{

    public $brand;
    public $model;

    public function UberPool($license, $driver, $brand, $model, $passenger)
    {
        parent::__construct($license, $driver,$passenger);
        $this->brand = $brand;
        $this->model = $model;
    }
}
