<?php

class Product
{
    private $idProduct;
    private $price;

    function __construct($idProduct = null, $price = null)
    {
        $this->idProduct = $idProduct;
        $this->price = $price;
    }

    function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
    }

    function getIdProduct()
    {
        return $this->idProduct;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function getPrice()
    {
        return $this->price;
    }
}

?>