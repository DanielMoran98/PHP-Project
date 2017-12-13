<?php
require_once __DIR__ . '/../src/Product.php';

class Database
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = new \PDO('sqlite:' . __DIR__ . '\..\data\products.sqlite3');
    }


    public function createTableProducts()
    {

        $sql = 'CREATE TABLE IF NOT EXISTS products (
                id INTEGER PRIMARY KEY,
                description TEXT,
                price TEXT)';
        $this->pdo->exec($sql);
    }

    public function insertProduct($description, $price)
    {
        $sql = 'INSERT INTO products (description, price )
                VALUES (:description, :price)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->execute();
    }

    public function getAllProducts()
    {
        $sql = 'SELECT * FROM products';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll(\PDO::FETCH_CLASS, 'Product');
        return $products;
    }

    public function dropTableProducts()
    {
    // Drop table messages from file db
        $this->pdo->exec('DROP TABLE products');
    }
}