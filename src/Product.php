<?php
class Product
{
    private $id;
    private $description;
    private $price;

    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function printProduct()
    {


        print '<tr>';
        print '<td> ' . $this->getId() . '</td>';
        print '<td> ' . $this->getDescription() . '</td>';
        print '<td>'  . $this->getPrice() . '</td>';
        print '</tr>';

    }
}