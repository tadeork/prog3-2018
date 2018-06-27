<?php

# declaración de clase
/**
 * Product está encargado de: 
 * - asignar nombre
 * - asignar precio
 * - asignar estado de regalo
 */
class Product {
    # definición de propiedades
    private $name;
    private $price;
    protected $gift;

    public function __construct($name = null, $price = 0, $gift = false)
    {
        $this->setName($name);
        $this->setPrice($price);

        return $this;
    }

    public function setName($newName = 'sin nombre')
    {
        $this->name = $newName;
    }

    public function setPrice($newPrice = 0)
    {
        $this->price = $newPrice;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    // ¿es un regalo?
    public function isGift()
    {
        return $this->gift;
    }
}
