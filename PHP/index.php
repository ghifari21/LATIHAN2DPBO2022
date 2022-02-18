<?php

include "Product.php";
include "Hardware.php";
include "Memory.php";

$VGA = new Memory();
$VGA->setBrand("ASUS");
$VGA->setModel("RTX 3090");
$VGA->setPrice("Rp. 40.500.000,-");
$VGA->setIdProduct("AG21");
$VGA->setFrequency("19.5 Gbps");
$VGA->setMemorySize("24GB");
$VGA->setSupportsCuda("10496 Cores");

echo "DESKRIPSI VGA<br/>";
echo "=================================<br/>";
echo "Brand         : ". $VGA->getBrand(). "<br/>";
echo "Model         : ". $VGA->getModel(). "<br/>";
echo "Price         : ". $VGA->getPrice(). "<br/>";
echo "Product ID    : ". $VGA->getIdProduct(). "<br/>";
echo "Frequency     : ". $VGA->getFrequency(). "<br/>";
echo "Memory Size   : ". $VGA->getMemorySize(). "<br/>";
echo "Cuda Cores    : ". $VGA->getSupportsCuda(). "<br/>";


?>