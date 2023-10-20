<?php
include "BaseTariff.php";

$price = new BaseTariff(100, 10);

echo $price->calcprice();
