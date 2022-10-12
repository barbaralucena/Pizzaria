<?php
    require("models/model.categories.php");
    $modelCategories= new Categories();
    $categories= $modelCategories-> getCategories();





$title= "menu";

require("views/view.categories.php");
