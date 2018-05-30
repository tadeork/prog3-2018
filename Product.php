<?php

# declaración de clase
class Product {
    # definición de propiedades
    private $name;
    private $price;
    protected $stock;

    public function __construct($name = null, $price = null)
    {
        # simulamos que hay existencia del producto
        $this->stock = true;
        $this->setName($name);
        $this->setPrice($price);
        // ver página 237 del libro acerca de $this
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
}
