<?php

class Hardware extends Product
{
    private $brand;
    private $model;

    function __construct($brand = null, $model = null)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    function setBrand($brand)
    {
        $this->brand = $brand;
    }

    function getBrand()
    {
        return $this->brand;
    }

    function setModel($model)
    {
        $this->model = $model;
    }

    function getModel()
    {
        return $this->model;
    }
}

?>