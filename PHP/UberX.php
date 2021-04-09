<?php

require_once('Car.php');

class UberX extends Car
{
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model, $passenger)
    {
        parent::__construct($license, $driver, $passenger);
        $this->brand =  $brand;
        $this->model = $model;
    }
}
