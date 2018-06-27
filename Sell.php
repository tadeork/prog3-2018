<?php
# en un arreglo de  lista de productos añadir los objetos de producto
# escribir los métodos necesarios para implementar las acciones: 
# - registrar producto
# - calcular y mostrar precio final
# - mostrar lista de prodcutos vendidos


include 'Transaction.php';
include 'Connection.php';
include 'Logger.php';

/**
 * Sell está encargado de: 
 * - contener una lista de Product
 * - tiene que ser capaz de guardar vacíos
 */
class Sell implements Transaction{

    private $productList = [];

    /**
     * Registra los productos
     */
    public function setProduct($product)
    {
        Logger::logEvent("Crear", "algo", "nuevo arreglo");
        if ($product->getName() !== 'sin nombre' && $product->getPrice() >= 0) {
            $this->productList[] = $product;
        }
    }

    /**
     * Calcula el total de la venta
     */
    public function makeTotal()
    {
        $total = 0;
        foreach ($this->productList as $product) {
            $total += $product->getPrice();
        }
        echo "el total de la venta es: " . $total;
        echo "<br>";
    }

    /**
     * Muestra la lista de productos vendidos
     */
    public function showSellProductsList()
    {
        foreach ($this->productList as $product) {
            echo "producto: " . $product->getName();
            echo "<br>";
        }
    }

    public function saveProductList()
    {
        // si la lista no está vacía la persistimos
        if (!empty($productList)) {
            // Connection
        }
    }
}

