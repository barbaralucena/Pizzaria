<?php
    require("models/model.categories.php");
    require("models/model.products.php");

    $modelCategories= new Categories();
    $categories= $modelCategories-> getCategories();
    
    
    
    if(!empty($id) && is_numeric($id)){
        $modelProducts= new Products();
        $products= $modelProducts-> getProducts($id);
        
        require("views/view.categories.php");
        exit;
    }
    $title="menu";
    require("views/view.menu.php");
