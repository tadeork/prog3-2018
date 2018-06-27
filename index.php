<?php

// ver página 51 del libro
include 'Sell.php';
include 'Product.php';

$venta = new Sell();

// setea un producto
$producto1 = new Product();
$producto1->setName("leche");
$producto1->setPrice(10);
// lo guarda en la lista de venta
$venta->setProduct($producto1);

$producto2 = new Product();
$producto2->setName("crema");
$producto2->setPrice(14);
// lo guarda en la lista de venta
$venta->setProduct($producto2);

// producto vacío
$producto3 = new Product();
$venta->setProduct($producto3);

// producto vacío con valores vacíos
$producto4 = new Product();
$producto4->setName();
$producto4->setPrice();
$venta->setProduct($producto4);

// carga producto con el objeto sin variable
$venta->setProduct(new Product());

$venta->setProduct(new Product("acelga", 3));

$venta->setProduct(new Product("perejil", -80, true));

$venta->makeTotal();
$venta->showSellProductsList();
