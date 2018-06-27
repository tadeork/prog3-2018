<?php

/**
 * Connection está encargada de contener toda la lógica para: 
 * - crear tablas
 * - consultar
 * - insertar
 */
class Connection {

    // impedimos que redefinan el constructor
    public function __construct() { }
    // buscar métodos mágicos de PHP

    // método estático
    private function connect()
    {
        // datos de conexión
        $userName = 'root';
        $password = '';
        $host = '127.0.0.1';
        $database = 'prog3db';
        $driver = "mysql";
        // al ser un recurso externo debemos controlar posibles errores
        try {
            return new PDO(
                "$driver:host=$host;dbname=$database",
                $userName,
                $password
            );
        } catch (PDOException $e) {
            print_r('Error: ' . $e->getMessage());
            // TODO crear logger para los errores
        } finally {
            return null;
        }
    }

    public function createSellsTable()
    {
        // sentencia para crear la tabla
        $tableCreateQuery = `CREATE TABLE IF NOT EXISTS sells (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        total FLOAT(20,2),
        time_stamp  TIMESTAMP
        );`;

        $connection = $this->connect();
        if (isset($connection)){
            $connection->execute($tableCreateQuery);
        }
    }

    public function createSoldProductsTable()
    {
        // sentencia para crear la tabla
        $tableCreateQuery = `CREATE TABLE IF NOT EXISTS sold_products (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        sell_id INT(6) UNSIGNED,
        name VARCHAR(120) NOT NULL,
        price FLOAT(20,2),
        gift BOOLEAN,
        time_stamp  TIMESTAMP
        FOREIGN KEY sell_id REFERENCE sells(id),
        );`;
    }

    public function saveSell($sell = null) {
        // TODO crear el query para el insert de la venta
        $queryInsert = ``;
        if (isset($sell)) {

        }
    }

    // TODO crear primero la venta y luego guardar los productos de la venta
    public function saveProducts($productList = [], $sell_id)
    {
        // string multilinea
        $queryInsert = `
            INSERT INTO sells (name, price) values(:name, :price);
        `;

        // TODO persistir los productos uno a uno usando prepare statement
        if (!empty($productList)) {
            $connection = $this->connect();
            $statement = $connection->prepare($queryInsert);
//            $statement->bindParam(':name', )
        }
    }

}
