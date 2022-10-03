<?php
require("models/model.pizza.php");

$modelPizzas= new Pizzas();
$pizzas = $modelPizzas-> getAllPizzas();

$title = "Home";
require ("views/view.home.php");
?>