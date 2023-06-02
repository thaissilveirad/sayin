<?php

namespace Source\Models;

use Source\Core\Connect;

class Product 
{
    public function selectAll ()
    {
        $query = "SELECT * FROM products";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }
}

?>