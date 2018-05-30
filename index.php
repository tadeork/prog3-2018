<?php

// ver página 51 del libro
include 'Sell.php';
include 'Product.php';

$venta = new Sell();

$venta->setProduct(new Product("aceite", 10));
$venta->setProduct(new Product("zapallo", 5));
$venta->setProduct(new Product("crema", 8));
$venta->setProduct(new Product("sal", 4));

$venta->makeTotal();
$venta->showSellProductsList();
