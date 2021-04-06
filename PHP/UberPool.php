<?php

require_once('Car.php');

class UberPool extends car
{

    public $brand;
    public $model;

    public function UberPool($license, $driver, $brand, $model)
    {
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }
}
