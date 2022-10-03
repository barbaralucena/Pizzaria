<?php
require_once("models/model.base.php");

class Pizzas extends Base {
    public function getAllPizzas(){
        $query = $this->db->prepare("
        SELECT pizza_id, name, image
        FROM pizzas
        ");

    $query->execute();

    return $query->fetchAll();
}
}

